<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

class BlogsMiddleware extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new BlogsModel;
    }

    public function getCountBlogs()
    {
        return $this->model->countBlogs();
    }

    public function getAllLatestBlogs()
    {
        return $this->model->getAllLatestBlogs();
    }

    public function getAllBlogsByUserId($id = NULL)
    {
        if (empty($id)) {
            $id = $_SESSION["user"]["id"];
        } else {
            $id = $this->dataCleaner($id);
        }

        return $this->model->getAllBlogsByUserId((int)$id);
    }

    public function getBlogsById(int $id)
    {
        return $this->model->getBlogsById($id);
    }

    public function getBlogsByTagId(int $id)
    {
        return $this->model->getBlogsByTagId($id);
    }
    public function getBlogsByTitle($title)
    {
        return $this->model->getBlogsByTitle($title);
    }

    public function getAuthorBlog(int $id)
    {
        return $this->model->getAuthorBlog($id);
    }

    public function getCommentsBlog(int $id)
    {
        return $this->model->getCommentsBlog($id);
    }

    public function getAllBlogs(String $params)
    {
        switch ($params) {
            case 'all':
                $blogs = $this->model->getAllBlogs(true);
                $blogs = array_chunk($blogs, 6);
                return ["blogs" => $blogs];
                break;
            case 'popular':
                // $blogs = $this->model->getAllBlogsByLike(true);
                // $blogs = array_chunk($blogs, 6);
                // return $blogs;
                break;
            case 'latest':
                $this->model;
                break;
            default: // search
                $this->model;
                break;
        }
    }

    public function insert(String $tags_id, int $user_id, String $title, $summary, $content, String $poster_path = NULL, $status)
    {

        if (empty($poster_path)) {
            $result = $this->model->insertBlog($tags_id, $user_id, $title, $content, $summary, $status);
        } else {
            $result = $this->model->insertBlog($tags_id, $user_id, $title, $content, $summary, $status, $poster_path);
        }
        if ($result > 0) {
            header("location: " . $this->absUrl() . "/accounts/profile");
            die();
        } else {
            header("location: " . $this->absUrl() . "/");
            die();
        }
    }

    public function update(int $id, String $tags_id, String $title, $content, $summary, $status, $poster_path = NULL)
    {

        if (empty($poster_path)) {
            $result = $this->model->updateBlog($id, $tags_id, $title, $content, $summary, $status);
        } else {
            $result = $this->model->updateBlog($id, $tags_id, $title, $content, $summary, $status, $poster_path);
        }
        if ($result > 0) {
            header("location: " . $this->absUrl() . "/accounts/profile");
            die();
        } else {
            header("location: " . $this->absUrl() . "/");
            die();
        }
    }

    public function delete(int $id)
    {
        return $this->model->deleteBlog($id);
    }
}
