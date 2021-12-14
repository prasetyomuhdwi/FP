<?php
require_once("./views/component/Page.php");
require_once(__DIR__ . '/app/controllers/Login.php');
$loginClass = new Login();

$request = $_SERVER['REQUEST_URI'];
$config = parse_ini_file(__DIR__ . '/app/app.ini');
$request = "/" . trim($request, $config['app_path']);

switch ($request) {
    case '/':
        require __DIR__ . '/views/index.php';
        break;
    case '/about':
        require __DIR__ . '/views/about.php';
        break;
    case '/logout':
        $loginClass->logout();
        break;
    case '/login':
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $loginClass->login($_POST["email"], $_POST["password"]);
        } else {
            require __DIR__ . '/views/templates.php';
        }
        break;
    case '/register':
        require __DIR__ . '/views/templates.php';
        break;
    case '/latest':
        require __DIR__ . '/views/latest.php';
        break;
    case (preg_match('/blog/i', $request) ? true : false):
        require __DIR__ . '/views/blog.php';
        break;
    case (preg_match('/profile/i', $request) ? true : false):
        require __DIR__ . '/views/profile.php';
        break;
    case (preg_match('/bookmarks/i', $request) ? true : false):
        require __DIR__ . '/views/bookmarks.php';
        break;
    case (preg_match('/favorite/i', $request) ? true : false):
        require __DIR__ . '/views/favorite.php';
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
