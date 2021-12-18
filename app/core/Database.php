<?php
class Database extends Controller
{
    private $dbh; // database handler
    private $stmt; // Statement
    private $dsn; // Data Source Name

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

    public function execute()
    {
        $this->stmt->execute();
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
}
