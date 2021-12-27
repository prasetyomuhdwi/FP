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
            $validateClass = new ValidateUser();

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
                        $_SESSION["loginErr"] = NULL;
                        $this->mUser = $user;
                        header('Location: ' . $this->absUrl() . '/');
                        die();
                    } else {
                        header('Location: ' . $this->absUrl() . '/auth/register');
                        die();
                    }
                } else {
                    $error = array('email' => $validateClass->vEmail($email)[1], 'pass' => $validateClass->vPassword($password)[1]);
                    $_SESSION["loginErr"] = $error;
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
            $validateClass = new ValidateUser();
            if (empty($avatar_path)) {

                if (!empty($username) && !empty($fullname) && !empty($email) && !empty($bio) && !empty($password)) {
                    if (
                        $validateClass->vFullName($fullname)[0] &&
                        $validateClass->vUsername($username)[0] &&
                        $validateClass->vBio($bio)[0] &&
                        $validateClass->vPassword($password)[0] &&
                        $validateClass->vEmail($email)[0]
                    ) {

                        $model = new UsersModel;
                        $user = $model->insertUser($username, $fullname, $email, $password, $bio, $avatar_path);
                        if ($user) {
                            $user = $model->getUserByEmailAndPassword($email, $password);
                            $_SESSION["authenticated"] = 'true';
                            $_SESSION["user"] = $user;
                            $_SESSION["registerErr"] = NULL;
                            $this->mUser = $user;
                            header('Location: ' . $this->absUrl() . '/');
                            die();
                        } else {
                            header('Location: ' . $this->absUrl() . '/page/internalServerError');
                            die();
                        }
                    } else {
                        $error = array(
                            "Fullname" => $validateClass->vFullName($fullname)[1],
                            "Username" => $validateClass->vUsername($username)[1],
                            "Bio" => $validateClass->vBio($bio)[1],
                            "Password" => $validateClass->vPassword($password)[1],
                            "Email" => $validateClass->vEmail($email)[1],
                        );
                        $_SESSION["registerErr"] = $error;
                        header('Location: ' . $this->absUrl() . '/auth/register');
                        die();
                    }
                } else {
                    header('Location: ' . $this->absUrl() . '/auth/register');
                    die();
                }
            } else {
                // if (!empty($username) && !empty($fullname) && !empty($email) && !empty($bio) && !empty($password)) {
                //     if (
                //         $validateClass->vFullName($fullname)[0] &&
                //         $validateClass->vUsername($username)[0] &&
                //         $validateClass->vBio($bio)[0] &&
                //         $validateClass->vAvatar($avatar_path)[0] &&
                //         $validateClass->vPassword($password)[0] &&
                //         $validateClass->vEmail($email)[0]
                //     ) {
                //         $model = new UsersModel;
                //         $user = $model->insertUser($username, $fullname, $email, $password, $bio, $avatar_path);
                //         if ($user) {
                //             $_SESSION["authenticated"] = 'true';
                //             $_SESSION["user"] = $user;
                //             $_SESSION["registerErr"] = NULL;
                //             $this->mUser = $user;
                //             header('Location: ' . $this->absUrl() . '/');
                //             die();
                //         } else {
                //             header('Location: ' . $this->absUrl() . '/page/internalServerError');
                //             die();
                //         }
                //     } else {
                //         $error = array(
                //             "Fullname" => $validateClass->vFullName($fullname)[1],
                //             "Username" => $validateClass->vUsername($username)[1],
                //             "Bio" => $validateClass->vBio($bio)[1],
                //             "Password" => $validateClass->vPassword($password)[1],
                //             "Email" => $validateClass->vEmail($email)[1],
                //         );
                //         $_SESSION["registerErr"] = $error;
                //     }
                // }
                header('location: ' . $this->absUrl() . '/auth/register');
                die();
            }
        } else {
            header('location: ' . $this->absUrl() . '/auth/register');
            die();
        }
    }
}
