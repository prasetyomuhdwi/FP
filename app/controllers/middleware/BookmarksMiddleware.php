<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

class BookmarksMiddleware extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new BookmarksModel;
    }
    public function getCountBookmarks()
    {
        return $this->model->countBookmarks();
    }
}
