<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

class CommentsMiddleware extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new CommentsModel;
    }

    public function getCountComments()
    {
        return $this->model->countComments();
    }

    public function insert($blog_id, $user_id, $comment, $parent_id)
    {
        $result = $this->model->insertComment((int) $blog_id, (int) $user_id, $comment, (int) $parent_id);

        if ($result > 0) {
            header("location: " . $this->absUrl() . "/blogs/blog/" . $blog_id);
            die();
        } else {
            header("location: " . $this->absUrl() . "/blogs/blog/" . $blog_id);
            die();
        }
    }
}
