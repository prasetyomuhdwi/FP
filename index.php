<?php
$request = $_SERVER['REQUEST_URI'];
$request = "/" . trim($request, "/FP");

switch ($request) {
    case '/':
        require __DIR__ . '/views/index.php';
        break;
    case '/about':
        require __DIR__ . '/views/about.php';
        break;
    case '/login':
        require __DIR__ . '/views/login.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
