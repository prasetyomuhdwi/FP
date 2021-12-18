<?php
class Auth extends Controller
{
    // GET
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

    public function logout()
    {
        session_destroy();
        header('Location: ' . $this->absUrl() . '/auth/login');
        die();
    }

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
        $dataComp['script'] = "<script src='" . $this->absUrl() . "/assets/js/main.js'></script>";
        $dataComp['title'] = "Daftar";
        $dataComp['useNav'] = false;

        $dataComp['pageComp'] = new PageComp([], $this->absUrl());

        $this->view('templates/header', $dataComp);
        $this->view('auth/authPage', $data);
        $this->view('templates/footer', $dataComp);
    }

    // POST
    public function signin()
    {
        $middleware = new AuthMiddleware;
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
        $email = $this->dataCleaner($email);
        $password = $this->dataCleaner($password);

        $middleware->login($email, $password);
    }

    public function dataCleaner($data)
    {
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = strip_tags($data);
        $data = stripslashes($data);
        return $data;
    }
}
