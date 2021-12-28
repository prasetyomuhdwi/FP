<?php
session_start();

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
}
