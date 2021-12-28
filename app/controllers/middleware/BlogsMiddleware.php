<?php
session_start();

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

    public function insert()
    {
        $tags_id = implode(",", $_POST['tags_id']) . ",";
        $user_id = $_POST['user_id'];
        $summary = htmlspecialchars($_POST['summary']);
        $title = htmlspecialchars($_POST['title']);
        $content = htmlspecialchars($_POST['content']);

        $result = $this->model->insertBlog($tags_id, $user_id, $title, $content, $summary);
        if ($result > 0) {
            header("location: " . $this->absUrl() . "/baas/blogs");
            die();
        } else {
            header("location: " . $this->absUrl() . "/");
            die();
        }
    }
}
