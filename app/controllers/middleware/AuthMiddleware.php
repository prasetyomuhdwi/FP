<?php
session_start();

class AuthMiddleware extends Controller
{
    private $mAuth = false;
    private $mUser;

    public function __construct()
    {
        $this->mAuth = (empty($_SESSION["authenticated"]) || $_SESSION["authenticated"] != 'true') ? false : true;
        $this->mUser = (empty($_SESSION["user"])) ? NULL : $_SESSION["user"];
    }

    public function isLogin()
    {
        return $this->mAuth;
    }

    public function needAuth()
    {
        if (!$this->mUser) {
            header('Location: ' . $this->absUrl() . '/auth/login');
            die();
        }
    }

    public function isAdmin()
    {
        if (isset($this->mUser)) {
            if ($this->mUser['role'] != 'baas') {
                header('Location: ' . $this->absUrl() . '/Page/forbidden');
                die();
            } else {
                return true;
            }
        } else {
            header('Location: ' . $this->absUrl() . '/auth/login');
            die();
        }
    }
    public function logout()
    {
        $_SESSION["authenticated"] = 'false';
        $_SESSION["user"] = NULL;
        $this->mUser = NULL;
        header('Location: ' . $this->absUrl() . '/auth/login');
        die();
    }

    public function login(String $email, String $password)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $validateClass = new Validate();

            if (!empty($email) && !empty($password)) {
                if (
                    $validateClass->vPassword($password)[0] &&
                    $validateClass->vEmail($email)[0]
                ) {
                    $model = new UsersModel;
                    $user = $model->getUserByEmailAndPassword($email, $password);
                    if ($user) {
                        $_SESSION["authenticated"] = 'true';
                        $_SESSION["user"] = $user;
                        $this->mUser = $user;
                        header('Location: ' . $this->absUrl() . '/');
                        die();
                    } else {
                        header('Location: ' . $this->absUrl() . '/auth/register');
                        die();
                    }
                } else {

                    echo $validateClass->vEmail($email)[1];
                    echo $validateClass->vPassword($password)[1];
                }
            } else {
                header('Location: ' . $this->absUrl() . '/auth/login');
                die();
            }
        } else {
            header('location: ' . $this->absUrl() . '/auth/login');
            die();
        }
    }

    public function register(String $username, String $fullname, String $email, String $password, $bio, $avatar_path = NULL)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $validateClass = new Validate();
        } else {
            header('location: ' . $this->absUrl() . '/auth/register');
            die();
        }
    }
}
