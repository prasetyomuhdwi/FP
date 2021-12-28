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
}
