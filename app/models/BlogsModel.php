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
            // return $this->db->table($this->table)
            //     ->select("`id`,GROUP_CONCAT(tags.name) FROM tags WHERE instr(concat(' ,',blogs.tags_id,','),concat(',',tags.id,',')) > 1 ) AS `tags_id`,
            //  `title`,`poster_path`,`summary`,`created_at`,`deleted_at`")
            //     ->find();
            $this->db->query("SELECT `id`,
            (SELECT GROUP_CONCAT(tags.name) FROM tags WHERE instr(concat(' ,',blogs.tags_id,','),concat(',',tags.id,',')) > 1 ) AS 'tags_id',
            `user_id`,`title`,`poster_path`,`content`,`summary`,`created_at`,`updated_at`,`deleted_at` FROM " . $this->table);
            return $this->db->resultSet();
        } else {
            $this->db->query("SELECT * FROM " . $this->table);
            $tmp = $this->db->resultSet();
            // $tmp = $this->db->table($this->table)->select("`id`,`tags_id`,`title`,`poster_path`,`summary`,`created_at`,`deleted_at`")->find();
            foreach ($tmp as $key => $value) {
                $tmp[$key]["tags_id"] = rtrim($tmp[$key]["tags_id"], ",");
            }
            return $tmp;
        }
    }

    public function getBlogsByTitle($title)
    {
        $this->db->query("SELECT `id`,
            (SELECT GROUP_CONCAT(tags.name) FROM tags WHERE instr(concat(' ,',blogs.tags_id,','),concat(',',tags.id,',')) > 1 ) AS 'tags_id',
            `user_id`,`title`,`poster_path`,`content`,`summary`,`created_at`,`updated_at`,`deleted_at` FROM " . $this->table . " WHERE title:title");
        $this->db->bind("title", $title);
        $tmp = $this->db->resultSet();

        return $tmp;
    }
    public function getBlogsByTagId(int $id)
    {
        $this->db->query("SELECT `id`,
            (SELECT GROUP_CONCAT(tags.name) FROM tags WHERE instr(concat(' ,',blogs.tags_id,','),concat(',',tags.id,',')) > 1 ) AS 'tags_id',
            `user_id`,`title`,`poster_path`,`content`,`summary`,`created_at`,`updated_at`,`deleted_at` FROM " . $this->table);
        $tmp = $this->db->resultSet();
        foreach ($tmp as $key => $value) {
            $tmp[$key]["tags_id"] = rtrim($tmp[$key]["tags_id"], ",");
        }

        return $tmp;
    }

    public function getBlogsById(int $id)
    {
        $this->db->query("SELECT `id`,
        (SELECT GROUP_CONCAT(tags.name) FROM tags WHERE instr(concat(' ,',blogs.tags_id,','),concat(',',tags.id,',')) > 1 ) AS 'tags_name',
        `tags_id`,`user_id`,`title`,`poster_path`,`status`,`content`,`summary`,`created_at`,`updated_at`,`deleted_at` FROM " . $this->table . " WHERE id=:id");
        $this->db->bind("id", $id);
        $tmp = $this->db->single();
        $tmp["tags_id"] = explode(",", $tmp["tags_id"]);
        $tmp["tags_name"] = explode(",", $tmp["tags_name"]);
        if ($tmp["tags_id"][count($tmp["tags_id"]) - 1] == "") {
            array_pop($tmp["tags_id"]);
        }
        return $tmp;
    }

    public function getAuthorBlog(int $id)
    {
        $this->db->query("SELECT users.`id`,users.`username`,users.`fullname`,users.`bio`,users.`avatar_path` 
        FROM " . $this->table . " JOIN users 
        ON users.id=" . $this->table . ".user_id WHERE " . $this->table . ".id=:id");
        $this->db->bind("id", $id);
        return $this->db->single();
    }

    public function getCommentsBlog(int $id)
    {
        $this->db->query("SELECT comments.id,comments.comment,comments.parent_id,comments.created_at,comments.updated_at,comments.user_id,comments.deleted_at,users.username,users.avatar_path
        FROM `comments` INNER JOIN users ON users.id=comments.user_id WHERE blog_id=:id");
        $this->db->bind("id", $id);
        return $this->db->resultSet();
    }

    public function getAllBlogsByUserId($user_id)
    {
        $this->db->query("SELECT `id`,
        (SELECT GROUP_CONCAT(tags.name) FROM tags WHERE instr(concat(' ,',blogs.tags_id,','),concat(',',tags.id,',')) > 1 ) AS 'tags_id',
        `user_id`,`title`,`poster_path`,`content`,`summary`,`created_at`,`deleted_at`,
        (SELECT COUNT(id) FROM likes WHERE likes.blog_id = blogs.id) as likes,
        (SELECT COUNT(id) FROM bookmarks WHERE bookmarks.blog_id = blogs.id) as bookmarks 
        FROM " . $this->table . " WHERE user_id=:user_id AND `deleted_at` IS NULL");
        $this->db->bind("user_id", $user_id);
        return $this->db->resultSet();
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

    public function getAllLatestBlogs()
    {
        $this->db->query("SELECT `id`,
        (SELECT GROUP_CONCAT(tags.name) FROM tags WHERE instr(concat(' ,',blogs.tags_id,','),concat(',',tags.id,',')) > 1 ) AS 'tags_id',
        `user_id`,`title`,`poster_path`,`content`,`summary`,`created_at`,`deleted_at`,
        (SELECT COUNT(id) FROM likes WHERE likes.blog_id = blogs.id) as likes,
        (SELECT COUNT(id) FROM bookmarks WHERE bookmarks.blog_id = blogs.id) as bookmarks 
        FROM " . $this->table . " WHERE `deleted_at` IS NULL ORDER BY created_at DESC LIMIT 5");
        $tmp = $this->db->resultSet();
        return $tmp;
    }

    public function insertBlog(String $tags_id, int $user_id, String $title, $content, $summary, $status, $poster_path = NULL)
    {
        try {
            $this->db->table($this->table)->insert([
                "tags_id"   => $tags_id,
                "user_id"   => $user_id,
                "title"     => $title,
                "content"   => $content,
                "summary"   => $summary,
                "status"   => $status,
                "poster_path"   => $poster_path,
                "created_at" => "CURRENT_TIMESTAMP"
            ]);
            return $this->db->rowCount();
        } catch (PDOException $e) {
            return 0;
        }
    }

    public function updateBlog(int $id, String $tags_id, String $title, $content, $summary, $status, $poster_path = NULL)
    {
        $this->db->query('UPDATE `' . $this->table . '` SET 
            tags_id=:tags_id,
            title=:title,
            content=:content,
            summary=:summary,
            status=:status,
            poster_path=:poster_path,
            updated_at=CURRENT_TIMESTAMP
            WHERE id=:id');

        $this->db->bind('tags_id', $tags_id);
        $this->db->bind('title', $title);
        $this->db->bind('content', $content);
        $this->db->bind('summary', $summary);
        $this->db->bind('status', $status);
        $this->db->bind('poster_path', $poster_path);
        $this->db->bind('id', $id);

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
