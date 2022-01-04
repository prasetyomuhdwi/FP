<?php
session_start();

class UsersMiddleware extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new UsersModel;
    }

    public function getCountUsers()
    {
        return $this->model->countUsers();
    }

    public function getAllUsers()
    {
        return $this->model->getAllUsers();
    }

    public function getUserById(int $id)
    {
        return $this->model->getUserById($id);
    }

    public function getListAllUsers()
    {
        // $username = $this->dataCleaner($_POST['username']);
        // $fullname = $this->dataCleaner($_POST['fullname']);
        // $email = $this->dataCleaner($_POST['email']);
        // $password = $this->dataCleaner($_POST['password']);
        // $bio = $this->dataCleaner($_POST['bio']);

        // $result = $this->model->inputUser($username, $fullname, $email, $password, $bio);
        // if ($result > 0) {
        //     header("location: " . $this->absUrl());
        //     die();
        // } else {
        //     header("location: " . $this->absUrl() . "/auth/register");
        //     die();
        // }
    }


    public function delete()
    {
        // $id = htmlspecialchars(str_replace("/db/api/delete/user/", "", $_SERVER['REQUEST_URI']));
        // $result = $this->model->deleteUser($id);
        // if ($result > 0) {
        //     header("location: http://localhost/db/users");
        //     die();
        // } else {
        //     header("refresh:3; url=http://localhost/db/users");
        //     echo "DELETE USER FAILED";
        //     die();
        // }
    }

    public function update(int $id, string $username, string  $fullname, string  $email, $bio)
    {
        $result = $this->model->updateUserById($id, $username, $fullname, $email, $bio);
        if ($result > 0) {
            header("location: " . $this->absUrl() . "/baas/users");
            die();
        } else {
            header("refresh:3; url=" . $this->absUrl() . "/page/internalServerError");
            echo "UPDATE USER FAILED";
            die();
        }
    }
}
