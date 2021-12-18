<?php
class TagsModel
{
    private $table = 'tags';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllTags()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
}
