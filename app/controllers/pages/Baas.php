<?php
// Baas adalah sinonim dari
// Admin dan Bos
session_start();
class Baas extends Controller
{
    public function index()
    {
        $authMiddleware = new AuthMiddleware;
        if ($authMiddleware->isAdmin()) {
            $dataComp['baseUrl'] = $data['baseUrl'] = $this->absUrl();
            $dataComp['css'] = "<link rel='stylesheet' href='" . $this->absUrl() . "/assets/css/style.css'>";

            $dataComp['script'] = "
            <script src='" . $this->absUrl() . "/assets/js/main.js'></script>
            <script src='" . $this->absUrl() . "/assets/js/baas.js'></script>
            ";

            $dataComp['title'] = "Dashboard";
            $dataComp['useNav'] = false;

            $dataComp['pageComp'] = new PageComp([], $this->absUrl());

            $this->view('templates/header', $dataComp);
            $this->view('baas/index', $data);
            $this->view('templates/footer', $dataComp);
        }
    }
}
