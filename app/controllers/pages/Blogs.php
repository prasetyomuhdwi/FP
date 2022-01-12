<?php
// Class ini berfungsi mengatur 
// halaman Blog dan sejenisnya
class Blogs extends Controller
{
    // untuk masuk kesini 
    // http://localhost/.../blogs/
    public function index()
    {
        $dataComp['baseUrl'] = $data["baseUrl"] = $this->absUrl();
        $dataComp['script'] = "<script src='" . $this->absUrl() . "/assets/js/main.js'></script>";
        $dataComp['title'] = "Semua Blog";
        $dataComp['useNav'] = true;

        $dataComp['pageComp'] = new PageComp(['blog', 'all'], $this->absUrl());

        $mBlogs = new BlogsMiddleware;
        $data["result"] = $mBlogs->getAllBlogs("all");

        $this->view('templates/header', $dataComp);
        $this->view('blogs/list', $data);
        $this->view('templates/footer', $dataComp);
    }

    // untuk masuk kesini 
    // http://localhost/.../blogs/latest
    public function latest()
    {
        $dataComp['baseUrl'] = $data["baseUrl"] = $this->absUrl();
        $dataComp['script'] = "<script src='" . $this->absUrl() . "/assets/js/main.js'></script>";
        $dataComp['title'] = "Blog Terbaru";
        $dataComp['useNav'] = true;

        $dataComp['pageComp'] = new PageComp(['blog', 'latest'], $this->absUrl());

        $this->view('templates/header', $dataComp);
        $this->view('blogs/list', $data);
        $this->view('templates/footer', $dataComp);
    }

    // untuk masuk kesini 
    // http://localhost/.../blogs/tags
    public function tags()
    {
        $dataComp['baseUrl'] = $data["baseUrl"] = $this->absUrl();
        $dataComp['script'] = "<script src='" . $this->absUrl() . "/assets/js/main.js'></script>";
        $dataComp['title'] = "Tag Blog";
        $dataComp['useNav'] = true;
        $mTags = new TagsMiddleware;


        $data["tagsAll"] = $mTags->getAllTags();

        $dataComp['pageComp'] = new PageComp(['blog', 'tags'], $this->absUrl());

        $this->view('templates/header', $dataComp);
        $this->view('blogs/tags', $data);
        $this->view('templates/footer', $dataComp);
    }

    // untuk masuk kesini 
    // http://localhost/.../blogs/search/$keyword
    public function search($keyword)
    {
        $dataComp['baseUrl'] = $data["baseUrl"] = $this->absUrl();
        $dataComp['script'] = "<script src='" . $this->absUrl() . "/assets/js/main.js'></script>";
        $dataComp['useNav'] = true;
        $dataComp['title'] = "Mencari ";
        $mBlogs = new BlogsMiddleware;

        switch ($keyword) {
            case (preg_match('/tag/i', $keyword) ? true : false):
                $keyword = str_replace("tag=", "", $keyword);
                $data["result"]["blogs"] = $mBlogs->getBlogsByTagId($keyword);
                break;
            case (preg_match('/title/i', $keyword) ? true : false):
                $keyword = str_replace("title=", "", $keyword);
                $keyword = str_replace("-", " ", $keyword);
                $data["result"]["blogs"] = $mBlogs->getBlogsByTitle($keyword);
                break;

            default:
                $dataComp['title'] = "Mencari " . $keyword;

                break;
        }

        $dataComp['pageComp'] = new PageComp(['blog'], $this->absUrl());

        $this->view('templates/header', $dataComp);
        $this->view('blogs/list', $data);
        $this->view('templates/footer', $dataComp);
    }

    // untuk masuk kesini 
    // http://localhost/.../blogs/create
    public function create()
    {
        $mAuth = new AuthMiddleware;

        if ($mAuth->isLogin()) {
            $dataComp['baseUrl'] = $data["baseUrl"] = $this->absUrl();
            $dataComp['css'] = "
        <style>
        /* CHECKBOX TOGGLE SWITCH */
        /* @apply rules for documentation, these do not work as inline style */
        .toggle-checkbox:checked {
        @apply: right-0 border-green-400;
        right: 0;
        border-color: #68D391;
        }
        .toggle-checkbox:checked + .toggle-label {
        @apply: bg-green-400;
        background-color: #68D391;
        }
        </style>
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
            'alignright alignjustify | bullist numlist | ' +
            'removeformat | code',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });</script>
        <script src='" . $this->absUrl() . "/assets/js/main.js'></script>
        ";

            $mTags = new TagsMiddleware;

            $data["getListTags"] = $mTags->getListAllTags();
            $dataComp['title'] = "Buat Blog";
            $dataComp['useNav'] = true;

            $dataComp['pageComp'] = new PageComp(['blog'], $this->absUrl());

            $this->view('templates/header', $dataComp);
            $this->view('blogs/create', $data);
            $this->view('templates/footer', $dataComp);
        } else {
            header("Refresh: 2;url=" . $this->absUrl() . "/auth/login");
            echo "Anda Belum login";
        }
    }

    // untuk masuk kesini 
    // http://localhost/.../blogs/create
    public function edit($id)
    {
        $mAuth = new AuthMiddleware;

        if ($mAuth->isLogin()) {
            $dataComp['baseUrl'] = $data["baseUrl"] = $this->absUrl();
            $dataComp['css'] = "
        <style>
        /* CHECKBOX TOGGLE SWITCH */
        /* @apply rules for documentation, these do not work as inline style */
        .toggle-checkbox:checked {
        @apply: right-0 border-green-400;
        right: 0;
        border-color: #68D391;
        }
        .toggle-checkbox:checked + .toggle-label {
        @apply: bg-green-400;
        background-color: #68D391;
        }
        </style>
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
            'alignright alignjustify | bullist numlist | ' +
            'removeformat | code',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
        });</script>
        <script src='" . $this->absUrl() . "/assets/js/main.js'></script>
        ";

            $mTags = new TagsMiddleware;
            $mBlogs = new BlogsMiddleware;

            $data["blog"] = $mBlogs->getBlogsById((int) $id);
            $data["getListTags"] = $mTags->getListAllTags();

            $dataComp['title'] = "Edit Blog";
            $dataComp['useNav'] = true;

            $dataComp['pageComp'] = new PageComp(['blog'], $this->absUrl());

            $this->view('templates/header', $dataComp);
            $this->view('blogs/create', $data);
            $this->view('templates/footer', $dataComp);
        } else {
            header("Refresh: 2;url=" . $this->absUrl() . "/auth/login");
            echo "Anda Belum login";
        }
    }

    // untuk masuk kesini 
    // http://localhost/.../blogs/blog/$id
    public function blog($id)
    {
        if (isset($id)) {
            $dataComp['baseUrl'] = $data["baseUrl"] = $this->absUrl();
            $dataComp['script'] = "
                <script src='" . $this->absUrl() . "/assets/js/main.js'></script>
                <script src='" . $this->absUrl() . "/assets/js/blog.js'></script>
            ";
            $dataComp['class-body'] = "bg-gray-100 font-sans leading-normal tracking-normal";
            $dataComp['title'] = "Blog";
            $dataComp['useNav'] = true;

            $mBlogs = new BlogsMiddleware;

            $data["blog"] = $mBlogs->getBlogsById((int) $id);
            $data["author"] = $mBlogs->getAuthorBlog((int) $id);
            $data["comments"] = $mBlogs->getCommentsBlog((int) $id);
            $dataComp['pageComp'] = new PageComp(['blog'], $this->absUrl());

            $this->view('templates/header', $dataComp);
            $this->view('blogs/blog', $data);
            $this->view('templates/footer', $dataComp);
        } else {
            header('location:' . $this->absUrl());
        }
    }
}
