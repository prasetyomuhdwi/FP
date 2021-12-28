<?php
session_start();

class TagsMiddleware extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new TagsModel;
    }

    public function getCountTags()
    {
        return $this->model->countTags();
    }
}
