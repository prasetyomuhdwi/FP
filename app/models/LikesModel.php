<?php
class LikesModel
{
    private $table = 'likes';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllLikes()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
}
