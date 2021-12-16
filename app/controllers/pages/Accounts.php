<?php
session_start();

class Accounts extends Controller
{
    public function profile()
    {
        $dataComp['baseUrl'] = $this->absUrl();
        $dataComp['script'] = "<script src='" . $this->absUrl() . "/assets/js/main.js'></script>";
        $dataComp['title'] = "Profile";
        $dataComp['useNav'] = true;

        $dataComp['pageComp'] = new PageComp(['profile'], $this->absUrl());

        $this->view('templates/header', $dataComp);
        $this->view('accounts/profile');
        $this->view('templates/footer', $dataComp);
    }

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
