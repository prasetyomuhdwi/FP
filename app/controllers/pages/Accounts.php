<?php
session_start();

class Accounts extends Controller
{
    // untuk masuk kesini 
    // http://localhost/.../accounts/profile/
    public function profile()
    {
        $dataComp['baseUrl'] = $data['baseUrl'] = $this->absUrl();
        $dataComp['script'] = "<script src='" . $this->absUrl() . "/assets/js/main.js'></script>";
        $dataComp['title'] = "Profile";
        $dataComp['useNav'] = true;

        $dataComp['pageComp'] = new PageComp(['profile'], $this->absUrl());

        $this->view('templates/header', $dataComp);
        $this->view('accounts/profile', $data);
        $this->view('templates/footer', $dataComp);
    }

    // untuk masuk kesini 
    // http://localhost/.../accounts/favorit/
    public function favorit()
    {
        $dataComp['baseUrl'] = $this->absUrl();
        $dataComp['script'] = "<script src='" . $this->absUrl() . "/assets/js/main.js'></script>";
        $dataComp['title'] = "Blog Yang Anda Sukai";
        $dataComp['useNav'] = true;

        $dataComp['pageComp'] = new PageComp(['favorit'], $this->absUrl());

        $this->view('templates/header', $dataComp);
        $this->view('accounts/favorite');
        $this->view('templates/footer', $dataComp);
    }

    // untuk masuk kesini 
    // http://localhost/.../accounts/edit/
    public function edit()
    {
        $dataComp['baseUrl'] = $data['baseUrl'] = $this->absUrl();
        $dataComp['script'] = "<script src='" . $this->absUrl() . "/assets/js/main.js'></script>";
        $dataComp['title'] = "Edit User";
        $dataComp['useNav'] = true;

        $dataComp['pageComp'] = new PageComp(['favorit'], $this->absUrl());

        $this->view('templates/header', $dataComp);
        $this->view('accounts/edit', $data);
        $this->view('templates/footer', $dataComp);
    }

    // untuk masuk kesini 
    // http://localhost/.../accounts/bookmark/
    public function bookmark()
    {
        $dataComp['baseUrl'] = $this->absUrl();
        $dataComp['script'] = "<script src='" . $this->absUrl() . "/assets/js/main.js'></script>";
        $dataComp['title'] = "Blog Yang Anda Tandai";
        $dataComp['useNav'] = true;

        $dataComp['pageComp'] = new PageComp(['bookmark'], $this->absUrl());

        $this->view('templates/header', $dataComp);
        $this->view('accounts/bookmarks');
        $this->view('templates/footer', $dataComp);
    }
}
