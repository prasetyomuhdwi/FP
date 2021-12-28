<?php
class Database extends Controller
{
    private $dbh; // database handler
    private $stmt; // Statement
    private $dsn; // Data Source Name
    private $select_statement;
    private $condition_statement = [];
    private $limit_statement;
    private $offset_statement;
    private $group_by_statement;
    private $table;

    private $db_type;
    private $db_host;
    private $db_user;
    private $db_password;
    private $db_name;

    public function __construct()
    {
        // init
        $this->db_type = $this->dbInfo()['db_type'];
        $this->db_host = $this->dbInfo()['db_host'];
        $this->db_user = $this->dbInfo()['db_user'];
        $this->db_password = $this->dbInfo()['db_password'];
        $this->db_name = $this->dbInfo()['db_name'];

        // mysql:host=hostname;dbname=dbname
        $this->dsn = $this->db_type . ":host=" . $this->db_host . ";dbname=" . $this->db_name;

        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->dbh = new PDO($this->dsn, $this->db_user, $this->db_password, $option);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function query(String $queryString)
    {
        $this->stmt = $this->dbh->prepare($queryString);
    }

    public function bind($param, $value, $type = null)
    {
        if (is_null($type)) {
            switch (true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
                    break;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    public function resultSet() // untuk data yang banyak
    {
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single() // untuk satu data
    {
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount() // untuk menghitung data yang masuk
    {
        return $this->stmt->rowCount();
    }


    // example use select
    // Database::table($this->table)
    // ->select('name, password, email')
    // -> where(["name = 'chandra'", "laptop != 'mackbook'"])
    // -> limit(10)
    // -> offset(2)
    // -> find();

    // example use insert
    // Database::table($this->table)
    // -> insert([
    //     "name"=>"chandra",
    //     "laptop"=>"thinkpad"
    // ])

    // example update
    // Database::table($this->table)
    // -> where("id = id")
    // -> update([
    //     "name"=>"chandra",
    //     "laptop"=>"laptop"
    // ])

    // example soft delete
    // Database::table($this->table)
    // -> where("id = id")
    // -> softDelete();

    // example hard delete
    // Database::table($this->table)
    // -> where("id = id")
    // -> delete();

    public function table(String $q)
    {
        $this->table = $q;
        return $this;
    }

    public function insert($q)
    {
        if (!isset($this->table)) {
            throw new Exception('table name required');
        }

        $values = [];
        $table = [];
        $table_bind = [];
        $count = 0;

        foreach ($q as $key => $value) {
            array_push($table, $key);
            if ($value == "CURRENT_TIMESTAMP") {
                array_push($table_bind, $key);
            } else {
                $count++;
                array_push($table_bind, ":" . $key);
            }
            array_push($values, $value);
        }

        $statement = "insert into " . $this->table . " ( " . join(",", $table) . " ) values (" . join(",", $table_bind) . ")";
        $this->stmt = $this->dbh->prepare($statement);

        for ($i = 0; $i < $count; $i++) {
            $this->bind($table[$i], $value[$i]);
        }

        $this->execute();
    }

    public function select(String $q)
    {
        $this->select_statement = $this->select_statement . $q;
        return $this;
    }

    // example params ["name =" => 'chandra'], ["laptop = " => 'mackbook']]
    public function where($q)
    {
        $this->condition_statement = array_merge($this->condition_statement, $q);
        return $this;
    }

    public function group(String $q)
    {
        $this->group_by_statement = $this->group_by_statement . $q;
        return $this;
    }

    public function limit(Int $i)
    {
        $this->limit_statement = $i;
    }

    public function offset(Int $i)
    {
        $this->offset_statement = $i;
    }

    public function buildSelectQuery()
    {

        // throw new Exception('Division by zero.');
        $statement = "select ";

        if ($this->select_statement == "") {
            $statement = $statement . "*";
        } else {
            $statement = $statement . $this->select_statement;
        }

        if (!isset($this->table)) {
            throw new Exception('table name required');
        } else {
            $statement = $statement . " from " . $this->table;
        }

        if (count($this->condition_statement) > 0) {
            $statement = $statement . " where ";

            foreach ($this->condition_statement as $index => $condition) {
                if ($index == 0) {
                    $statement = $statement . $condition;
                    continue;
                }
                $statement = $statement . " and " . $condition;
            }
        }

        if (isset($this->limit_statement)) {
            $statement = $statement . " limit " . $this->limit_statement;
        }

        if (isset($this->offset_statement)) {
            $statement = $statement . " offset " . $this->offset_statement;
        }

        $this->stmt = $this->dbh->prepare($statement);

        $this->execute();
        return $this->stmt;
    }

    public function execute()
    {
        $this->stmt->execute();
    }

    public function find()
    {
        return $this->buildSelectQuery()->fetchAll(PDO::FETCH_ASSOC);
    }

    public function first()
    {
        return $this->buildSelectQuery()->fetch(PDO::FETCH_ASSOC);
    }
}
