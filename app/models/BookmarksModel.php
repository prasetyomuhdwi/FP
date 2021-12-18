<?php
class BookmarksModel
{
    private $table = 'bookmarks';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBookmarks()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
}
