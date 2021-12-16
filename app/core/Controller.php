<?php
class Controller
{
    private $config = [];

    public function __construct()
    {
        $this->config = parse_ini_file('./app/app.ini');
    }

    public function view($view, $data = [])
    {
        require_once './views/' . $view . '.php';
    }

    public function absUrl()
    {
        return $this->config['app_root'];
    }
}
