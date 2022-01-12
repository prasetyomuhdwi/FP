<?php
class App
{
    protected $controller = 'Page';
    protected $method = 'notFound';
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseURL();

        // Controller
        if (file_exists('./app/controllers/pages/' . ucfirst($url[0]) . '.php')) {
            $this->controller = ucfirst($url[0]);
            unset($url[0]);
        }

        require_once './app/controllers/pages/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Mengembalikan halaman 404
        if ($url != NUll) {
            // Method or Function
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            } else {
                require_once './app/controllers/pages/Page.php';
                $this->controller = new Page;
            }

            // Parameter
            if (!empty($url)) {
                $this->params = array_values($url);
            }
        } else {
            if (method_exists($this->controller, 'index')) {
                $this->method = 'index';
            } else {
                require_once './app/controllers/pages/Page.php';
                $this->controller = new Page;
            }
        }
        // Jalankan Controller,method, serta kirimkan params
        try {
            call_user_func_array([$this->controller, $this->method], $this->params);
        } catch (ErrorException $e) {
            require_once './app/controllers/pages/Page.php';
            $this->controller = new Page;
            $this->method = 'internalServerError';
            call_user_func_array([$this->controller, $this->method], $this->params);
        }
    }

    public function parseUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
