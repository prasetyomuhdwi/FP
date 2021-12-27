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

    public function getListTags()
    {
        $this->db->query('SELECT `id`,`name` FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function insertTag(String $name)
    {
        $this->db->query('INSERT INTO ' . $this->table . ' (`name`,`created_at`) VALUES (:name, CURRENT_TIMESTAMP)');
        $this->db->bind('name', $name);
        try {
            $this->db->execute();
            return $this->db->rowCount();
        } catch (PDOException $e) {
            return 0;
        }
    }

    public function deleteTag(Int $id)
    {
        $this->db->query('DELETE FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        try {
            $this->db->execute();
            return $this->db->rowCount();
        } catch (PDOException $e) {
            return 0;
        }
    }

    public function countTags()
    {
        $this->db->query('SELECT COUNT(`id`) AS `count` FROM ' . $this->table);
        return $this->db->single();
    }
}
