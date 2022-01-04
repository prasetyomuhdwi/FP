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

        $dataComp["tab"] = "dashboard";
        $this->view('baas/template/header', $dataComp);
        $this->view('baas/index', $data);
        $this->view('baas/template/footer', $dataComp);

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

        $dataComp['title'] = "Users";
        $dataComp['useNav'] = false;

        $dataComp['pageComp'] = new PageComp([], $this->absUrl());

        $mUser = new UsersMiddleware;
        $data['allUsers'] = $mUser->getAllUsers();

        $this->view('templates/header', $dataComp);

        $dataComp["tab"] = "users";
        $this->view('baas/template/header', $dataComp);
        $this->view('baas/users', $data);
        $this->view('baas/template/footer', $dataComp);

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

        $dataComp['title'] = "Tags";
        $dataComp['useNav'] = false;

        $dataComp['pageComp'] = new PageComp([], $this->absUrl());

        $this->view('templates/header', $dataComp);

        $dataComp["tab"] = "tags";
        $this->view('baas/template/header', $dataComp);
        $this->view('baas/tags', $data);
        $this->view('baas/template/footer', $dataComp);

        $this->view('templates/footer', $dataComp);
    }

    // untuk masuk kesini 
    // http://localhost/.../baas/blogs
    public function blogs()
    {
        $dataComp['baseUrl'] = $data['baseUrl'] = $this->absUrl();
        $dataComp['css'] = "
        <link rel='stylesheet' href='" . $this->absUrl() . "/assets/css/style.css'>
        ";

        $dataComp['script'] = "
            <script src='https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js' referrerpolicy='origin'></script>
            <script>tinymce.init({
                selector:'textarea',
                menubar: false,
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table paste code help wordcount'
                ],
                toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | code',
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
            });</script>
            <script src='" . $this->absUrl() . "/assets/js/main.js'></script>
            <script src='" . $this->absUrl() . "/assets/js/baas.js'></script>
            ";

        $dataComp['title'] = "Blogs";
        $dataComp['useNav'] = false;

        $dataComp['pageComp'] = new PageComp([], $this->absUrl());

        $this->view('templates/header', $dataComp);

        $dataComp["tab"] = "blogs";
        $this->view('baas/template/header', $dataComp);
        $this->view('baas/blogs', $data);
        $this->view('baas/template/footer', $dataComp);

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

        $dataComp['title'] = "Likes";
        $dataComp['useNav'] = false;

        $dataComp['pageComp'] = new PageComp([], $this->absUrl());

        $this->view('templates/header', $dataComp);

        $dataComp["tab"] = "likes";
        $this->view('baas/template/header', $dataComp);
        $this->view('baas/likes', $data);
        $this->view('baas/template/footer', $dataComp);

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

        $dataComp['title'] = "Bookmarks";
        $dataComp['useNav'] = false;

        $dataComp['pageComp'] = new PageComp([], $this->absUrl());

        $this->view('templates/header', $dataComp);

        $dataComp["tab"] = "bookmarks";
        $this->view('baas/template/header', $dataComp);
        $this->view('baas/bookmarks', $data);
        $this->view('baas/template/footer', $dataComp);

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

        $dataComp['title'] = "Comments";
        $dataComp['useNav'] = false;

        $dataComp['pageComp'] = new PageComp([], $this->absUrl());

        $this->view('templates/header', $dataComp);

        $dataComp["tab"] = "comments";
        $this->view('baas/template/header', $dataComp);
        $this->view('baas/comments', $data);
        $this->view('baas/template/footer', $dataComp);

        $this->view('templates/footer', $dataComp);
    }
}
