<?php
class CommentsModel
{
    private $table = 'comments';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllComments()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getListComments()
    {
        $this->db->query('SELECT `id`,`comment` FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function countComments()
    {
        $this->db->query('SELECT COUNT(`id`) AS `count` FROM ' . $this->table . " WHERE `deleted_at` IS NULL");
        return $this->db->single();
    }

    public function insertComment(int $blog_id, int $user_id, String $comment, int $parent_id = 0)
    {
        $this->db->query('INSERT INTO ' . $this->table . ' (`blog_id`, `parent_id`, `user_id`, `comment`, `created_at`) VALUES (:blog_id, :parent_id, :user_id, :comment, CURRENT_TIMESTAMP)');
        $this->db->bind('blog_id', $blog_id);
        $this->db->bind('parent_id', $parent_id);
        $this->db->bind('user_id', $user_id);
        $this->db->bind('comment', $comment);
        try {
            $this->db->execute();
            return $this->db->rowCount();
        } catch (PDOException $e) {
            return 0;
        }
    }

    public function deleteComment(Int $id)
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
}
