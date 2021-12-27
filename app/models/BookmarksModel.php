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

    public function countBookmarks()
    {
        $this->db->query('SELECT COUNT(`id`) AS `count` FROM ' . $this->table);
        return $this->db->single();
    }

    public function insertBookmark(int $blog_id, int $user_id)
    {
        $this->db->query('INSERT INTO `' . $this->table . '` (`blog_id`, `user_id`, `created_at`) VALUES (:blog_id,:user_id, CURRENT_TIMESTAMP)');
        $this->db->bind('blog_id', $blog_id);
        $this->db->bind('user_id', $user_id);
        try {
            $this->db->execute();
            return $this->db->rowCount();
        } catch (PDOException $e) {
            return 0;
        }
    }

    public function deleteBookmark(Int $id)
    {
        $this->db->query('DELETE FROM `' . $this->table . '` WHERE id=:id');
        $this->db->bind('id', $id);
        try {
            $this->db->execute();
            return $this->db->rowCount();
        } catch (PDOException $e) {
            return 0;
        }
    }
}
