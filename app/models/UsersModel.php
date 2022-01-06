<?php
class UsersModel
{
    private $table = 'users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUsers()
    {
        return $this->db->table($this->table)->select("*")->find();
    }

    public function getUserByEmailAndPassword(String $email, String $password)
    {
        return $this->db->table($this->table)->select("*")->where(["email='" . $email . "'", "password=MD5('" . $password . "')"])->first();
        // $this->db->query('SELECT * FROM ' . $this->table . ' WHERE email=:email AND password=MD5(:password)');
        // $this->db->bind('email', $email);
        // $this->db->bind('password', $password);
        // return $this->db->single();
    }

    public function getListUsers()
    {
        $this->db->query('SELECT `id`,`username` FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getUserById($id)
    {
        return $this->db->table($this->table)->select("*")->where(["id='" . $id . "'"])->first();
    }

    public function updateUserById(int $id, String $username, String $fullname, String $email, $bio)
    {
        $this->db->query("UPDATE `" . $this->table . "` SET `username`=':username',`fullname`=':fullname',`email`=':email',`bio`=':bio' WHERE `id`=:id");
        $this->db->bind('username', $username);
        $this->db->bind('fullname', $fullname);
        $this->db->bind('email', $email);
        $this->db->bind('bio', $bio);
        $this->db->bind('id', $id);
        var_dump("id=" . $id, "username=" . $username, "fullname=" . $fullname, "email=" . $email, "bio=" . $bio);
        try {
            $this->db->execute();
            return $this->db->rowCount();
        } catch (PDOException $e) {
            var_dump($e->getMessage());
            die();
            return 0;
        }
    }

    public function checkUsername($username)
    {
        $this->db->query('SELECT `username` FROM ' . $this->table . ' WHERE `username`=:username');
        $this->db->bind('username', $username);
        try {
            $this->db->execute();
            return $this->db->rowCount();
        } catch (PDOException $e) {
            return 0;
        }
    }

    public function checkEmail($email)
    {
        $this->db->query('SELECT `email` FROM ' . $this->table . ' WHERE `email`=:email');
        $this->db->bind('email', $email);
        try {
            $this->db->execute();
            return $this->db->rowCount();
        } catch (PDOException $e) {
            return 0;
        }
    }

    public function insertUser(String $username, String $fullname, String $email, String $password, $bio, String $avatar_path = NULL)
    {
        var_dump($avatar_path);
        if (empty($avatar_path)) {
            try {
                $this->db->table($this->table)->insert([
                    "username"   => $username,
                    "fullname"   => $fullname,
                    "email"      => $email,
                    "password"   => $password,
                    "bio"        => $bio,
                    "created_at" => "CURRENT_TIMESTAMP"
                ]);

                return $this->db->rowCount();
            } catch (PDOException $e) {
                return 0;
            }
        } else {
            try {
                $this->db->table($this->table)->insert([
                    "username"   => $username,
                    "avatar_path"   => $avatar_path,
                    "fullname"   => $fullname,
                    "email"      => $email,
                    "password"   => $password,
                    "bio"        => $bio,
                    "created_at" => "CURRENT_TIMESTAMP"
                ]);

                return $this->db->rowCount();
            } catch (PDOException $e) {
                return 0;
            }
        }
    }

    public function deleteUser(Int $id)
    {
        $this->db->query('UPDATE `' . $this->table . '` SET deleted_at=CURRENT_TIMESTAMP WHERE id=:id');
        $this->db->bind('id', $id);
        try {
            $this->db->execute();
            return $this->db->rowCount();
        } catch (PDOException $e) {
            return 0;
        }
    }

    public function countUsers()
    {
        return $this->db->table($this->table)->select("COUNT(`id`) AS `count`")->where(["`deleted_at` IS NULL"])->first();
        // $this->db->query('SELECT COUNT(`id`) AS `count` FROM ' . $this->table . ' WHERE `deleted_at` IS NULL');
        // return $this->db->single();
    }
}
