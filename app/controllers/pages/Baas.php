<?php
// Baas adalah sinonim dari
// Admin dan Bos
session_start();
class Baas extends Controller
{
    public function __construct()
    {
        $authMiddleware = new AuthMiddleware;
        if (!$authMiddleware->isAdmin()) {
            header("location: " . $this->absUrl() . "/");
        }
    }

    // untuk masuk kesini 
    // http://localhost/.../baas/
    public function index()
    {
        $dataComp['baseUrl'] = $data['baseUrl'] = $this->absUrl();
        $dataComp['css'] = "<link rel='stylesheet' href='" . $this->absUrl() . "/assets/css/style.css'>";

        $dataComp['script'] = "
            <script src='" . $this->absUrl() . "/assets/js/main.js'></script>
            <script src='" . $this->absUrl() . "/assets/js/baas.js'></script>
            ";

        $dataComp['title'] = "Dashboard";
        $dataComp['useNav'] = false;

        $dataComp['pageComp'] = new PageComp([], $this->absUrl());
        $mUser = new UsersMiddleware;
        $mTag = new TagsMiddleware;
        $mBlog = new BlogsMiddleware;
        $mBookmark = new BookmarksMiddleware;
        $mLike = new LikesMiddleware;
        $mComment = new CommentsMiddleware;

        $data['count'] = array(
            'user' => $mUser->getCountUsers()['count'],
            'blog' => $mBlog->getCountBlogs()['count'],
            'tag' => $mTag->getCountTags()['count'],
            'bookmark' => $mBookmark->getCountBookmarks()['count'],
            'like' => $mLike->getCountLikes()['count'],
            'comment' => $mComment->getCountComments()['count'],
        );

        $this->view('templates/header', $dataComp);
        $this->view('baas/index', $data);
        $this->view('templates/footer', $dataComp);
    }

    // untuk masuk kesini 
    // http://localhost/.../baas/users
    public function users()
    {
        $dataComp['baseUrl'] = $data['baseUrl'] = $this->absUrl();
        $dataComp['css'] = "<link rel='stylesheet' href='" . $this->absUrl() . "/assets/css/style.css'>";

        $dataComp['script'] = "
            <script src='" . $this->absUrl() . "/assets/js/main.js'></script>
            <script src='" . $this->absUrl() . "/assets/js/baas.js'></script>
            ";

        $dataComp['title'] = "Dashboard";
        $dataComp['useNav'] = false;

        $dataComp['pageComp'] = new PageComp([], $this->absUrl());

        $mUser = new UsersMiddleware;
        $data['allUsers'] = $mUser->getAllUsers();

        $this->view('templates/header', $dataComp);
        $this->view('baas/users', $data);
        $this->view('templates/footer', $dataComp);
    }

    // untuk masuk kesini 
    // http://localhost/.../baas/tags
    public function tags()
    {
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

    // untuk masuk kesini 
    // http://localhost/.../baas/blogs
    public function blogs()
    {
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

    // untuk masuk kesini 
    // http://localhost/.../baas/likes
    public function likes()
    {
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

    // untuk masuk kesini 
    // http://localhost/.../baas/bookmarks
    public function bookmarks()
    {
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

    // untuk masuk kesini 
    // http://localhost/.../baas/comments
    public function comments()
    {
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
