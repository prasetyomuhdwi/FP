<?php
class Controller
{
    private function config()
    {
        return parse_ini_file('./app/app.ini');
    }

    public function view($view, $data = [])
    {
        require_once './views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once './models/' . $model . '.php';
        return new $model;
    }

    public function absUrl()
    {
        return $this->config()['app_root'];
    }

    public function dbInfo()
    {
        return [
            'db_type' => $this->config()['db_type'],
            'db_name' => $this->config()['db_name'],
            'db_host' => $this->config()['db_host'],
            'db_user' => $this->config()['db_user'],
            'db_password' => $this->config()['db_password']
        ];
    }
}
