<?php
class Auth extends Controller
{
    // untuk masuk kesini 
    // http://localhost/.../auth/login/
    public function login()
    {
        $sign = new SignUpIn($this->absUrl());
        $data['content'] = $sign->content('login');
        $data['component'] = $sign->component('login');

        $dataComp['baseUrl'] = $data['baseUrl'] = $this->absUrl();
        $dataComp['css'] = "
        <style>
            .bg-auth {
                background-image: url('" . $this->absUrl() . "/assets/image/bg-tanam.jpeg');
                background-size: cover;
                background-repeat: no-repeat;
            }
        </style>";
        $dataComp['script'] = "<script src='" . $this->absUrl() . "/assets/js/main.js'></script>";
        $dataComp['title'] = "Login";
        $dataComp['useNav'] = false;

        $dataComp['pageComp'] = new PageComp([], $this->absUrl());
        $this->view('templates/header', $dataComp);
        $this->view('auth/authPage', $data);
        $this->view('templates/footer', $dataComp);
    }

    // untuk masuk kesini 
    // http://localhost/.../auth/register/
    public function register()
    {
        $sign = new SignUpIn($this->absUrl());
        $data['content'] = $sign->content('register');
        $data['component'] = $sign->component('register');

        $dataComp['baseUrl'] = $data['baseUrl'] = $this->absUrl();
        $dataComp['css'] = "
        <style>
            .bg-auth {
                background-image: url('" . $this->absUrl() . "/assets/image/bg-tanam.jpeg');
                background-size: cover;
                background-repeat: no-repeat;
            }
        </style>";

        $dataComp['script'] = "
        <script src='" . $this->absUrl() . "/assets/js/main.js'></script>
        <script src='" . $this->absUrl() . "/assets/js/register.js'></script>
        ";

        $dataComp['title'] = "Daftar";
        $dataComp['useNav'] = false;

        $dataComp['pageComp'] = new PageComp([], $this->absUrl());

        $this->view('templates/header', $dataComp);
        $this->view('auth/authPage', $data);
        $this->view('templates/footer', $dataComp);
    }

    // untuk masuk kesini 
    // http://localhost/.../auth/logout/
    public function logout()
    {
        $middleware = new AuthMiddleware;
        $middleware->logout();
    }

    // untuk masuk kesini 
    // http://localhost/.../auth/signin/
    public function signin()
    {
        $middleware = new AuthMiddleware;
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
        $email = $this->dataCleaner($email);
        $password = $this->dataCleaner($password);

        $middleware->login($email, $password);
    }

    // untuk masuk kesini 
    // http://localhost/.../auth/signuo/
    public function signup()
    {
        $middleware = new AuthMiddleware;
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
        $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $fullname = filter_var($_POST['fullname'], FILTER_SANITIZE_STRING);
        $bio = filter_var($_POST['bio'], FILTER_SANITIZE_STRING);


        $email = $this->dataCleaner($email);
        $bio = $this->dataCleaner($bio);
        $username = $this->dataCleaner($username);
        $fullname = $this->dataCleaner($fullname);
        $password = $this->dataCleaner($password);

        if (!empty($_FILES["avatar_path"])) {
            $libUpFile = new UploadFile(true, "avatar_path");
            $avatar_path = $libUpFile->user($_FILES["avatar_path"], $username);
            if (!is_array($avatar_path)) {
                $middleware->register($username, $fullname, $email, $password, $bio, $avatar_path);
            } else {
                $_SESSION["registerErr"] = $avatar_path;
            }
        } else {
            $middleware->register($username, $fullname, $email, $password, $bio);
        }
    }
}
