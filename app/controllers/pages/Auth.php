<?php
class Auth extends Controller
{
    public function login()
    {
        $sign = new SignUpIn($this->absUrl());
        $data['content'] = $sign->content('login');
        $data['component'] = $sign->component('login');

        $dataComp['baseUrl'] = $data['baseUrl'] = $this->absUrl();
        $dataComp['css'] = "<link rel='stylesheet' href='" . $this->absUrl() . "/assets/css/style.css'>";
        $dataComp['script'] = "<script src='" . $this->absUrl() . "/assets/js/main.js'></script>";
        $dataComp['title'] = "Login";
        $dataComp['useNav'] = false;

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
        $dataComp['content'] = $sign->content('register');
        $dataComp['component'] = $sign->component('register');

        $dataComp['baseUrl'] = $this->absUrl();
        $dataComp['css'] = "<link rel='stylesheet' href='" . $this->absUrl() . "/assets/css/style.css'>";
        $dataComp['script'] = "<script src='" . $this->absUrl() . "/assets/js/main.js'></script>";
        $dataComp['title'] = "Daftar";
        $dataComp['useNav'] = false;

        $this->view('templates/header', $dataComp);
        $this->view('auth/authPage', $dataComp);
        $this->view('templates/footer', $dataComp);
    }
}
