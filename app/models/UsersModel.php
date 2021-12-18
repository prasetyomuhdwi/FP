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
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getUserByEmailAndPassword(String $email, String $password)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE email=:email AND password=:password');
        $this->db->bind('email', $email);
        $this->db->bind('password', $password);
        return $this->db->single();
    }
}
