<?php
class BlogsModel
{
    private $table = 'blogs';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllblogs()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
}
