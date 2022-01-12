<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
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

    public function getAllLatestTags()
    {
        return $this->model->getAllLatestTags();
    }

    public function getAllTags()
    {
        return $this->model->getAllTags();
    }

    public function getListAllTags()
    {
        return $this->model->getListTags();
    }

    public function getTagsByName($name)
    {
        $name = $this->dataCleaner($name);
        return $this->model->getTagsByName($name);
    }
}
