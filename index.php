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
        require __DIR__ . '/views/signUpIn.php';
        break;
    case '/register':
        require __DIR__ . '/views/signUpIn.php';
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
