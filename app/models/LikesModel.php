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

    public function countLikes()
    {
        $this->db->query('SELECT COUNT(`id`) AS `count` FROM ' . $this->table);
        return $this->db->single();
    }

    public function insertLike(int $blog_id, int $user_id)
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

    public function deleteLike(Int $id)
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
