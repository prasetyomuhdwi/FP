<?php
class CommentsModel
{
    private $table = 'comments';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllcomments()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
}
