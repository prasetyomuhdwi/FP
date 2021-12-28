<?php
class BlogsModel
{
    private $table = 'blogs';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBlogs($tagsName = false)
    {
        if ($tagsName) {
            return $this->db->table($this->table)
                ->select("GROUP_CONCAT(tags.name) FROM tags WHERE instr(concat(' ,',blogs.tags_id,','),concat(',',tags.id,',')) > 1 ) AS 'tags_id',
             `user_id`,`title`,`poster_path`,`content`,`summary`,`created_at`,`updated_at`,`deleted_at`")
                ->find();
            // $this->db->query("SELECT `id`,
            // (SELECT GROUP_CONCAT(tags.name) FROM tags WHERE instr(concat(' ,',blogs.tags_id,','),concat(',',tags.id,',')) > 1 ) AS 'tags_id',
            // `user_id`,`title`,`poster_path`,`content`,`summary`,`created_at`,`updated_at`,`deleted_at` FROM " . $this->table);
            // return $this->db->resultSet();
        } else {
            // $this->db->query("SELECT * FROM " . $this->table);
            // $tmp = $this->db->resultSet();
            $tmp = $this->db->table($this->table)->select("*")->find();
            foreach ($tmp as $key => $value) {
                $tmp[$key]["tags_id"] = rtrim($tmp[$key]["tags_id"], ",");
            }
            return $tmp;
        }
    }

    public function getListBlogs()
    {
        $this->db->query('SELECT `id`,`title` FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function countBlogs()
    {
        $this->db->query('SELECT COUNT(`id`) AS `count` FROM ' . $this->table . " WHERE `deleted_at` IS NULL");
        return $this->db->single();
    }

    public function insertBlog(String $tags_id, int $user_id, String $title, $content, $summary)
    {
        $this->db->query('INSERT INTO `' . $this->table . '` (`tags_id`, `user_id`, `title`, `content`, `summary`, `created_at`) 
        VALUES (:tags_id,:user_id,:title,:content,:summary, CURRENT_TIMESTAMP)');
        $this->db->bind('tags_id', $tags_id);
        $this->db->bind('user_id', $user_id);
        $this->db->bind('title', $title);
        $this->db->bind('content', $content);
        $this->db->bind('summary', $summary);
        try {
            $this->db->execute();
            return $this->db->rowCount();
        } catch (PDOException $e) {
            return 0;
        }
    }

    public function deleteBlog(Int $id)
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
