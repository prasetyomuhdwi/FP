<?php
$request = $_SERVER['REQUEST_URI'];
$config = parse_ini_file(__DIR__ . '/app/app.ini');
$request = "/" . trim($request, $config['app_root']);

switch ($request) {
    case '/':
        require __DIR__ . '/views/index.php';
        break;
    case '/about':
        require __DIR__ . '/views/about.php';
        break;
    case '/login':
        require __DIR__ . '/views/templates.php';
        break;
    case '/register':
        require __DIR__ . '/views/templates.php';
        break;
    case '/latest':
        require __DIR__ . '/views/latest.php';
        break;
    case '/403':
        http_response_code(403);
        require __DIR__ . '/views/errorPage.php';
        break;
    case '/500':
        http_response_code(500);
        require __DIR__ . '/views/errorPage.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/errorPage.php';
        break;
}
