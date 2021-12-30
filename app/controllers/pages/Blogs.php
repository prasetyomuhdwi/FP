<?php
// Class ini berfungsi mengatur 
// halaman Blog dan sejenisnya
class Blogs extends Controller
{
    // untuk masuk kesini 
    // http://localhost/.../blogs/
    public function index()
    {
        $dataComp['baseUrl'] = $this->absUrl();
        $dataComp['script'] = "<script src='" . $this->absUrl() . "/assets/js/main.js'></script>";
        $dataComp['title'] = "Semua Blog";
        $dataComp['useNav'] = true;

        $dataComp['pageComp'] = new PageComp(['blog', 'all'], $this->absUrl());

        $mBlogs = new BlogsMiddleware;
        // $data["listBlogs"] = $mBlogs->getAllBlogs("all");
        $data = "test";

        $this->view('templates/header', $dataComp);
        $this->view('blogs/list', $data);
        $this->view('templates/footer', $dataComp);
    }

    // untuk masuk kesini 
    // http://localhost/.../blogs/latest
    public function latest()
    {
        $dataComp['baseUrl'] = $this->absUrl();
        $dataComp['script'] = "<script src='" . $this->absUrl() . "/assets/js/main.js'></script>";
        $dataComp['title'] = "Blog Terbaru";
        $dataComp['useNav'] = true;

        $dataComp['pageComp'] = new PageComp(['blog', 'latest'], $this->absUrl());

        $this->view('templates/header', $dataComp);
        $this->view('blogs/list');
        $this->view('templates/footer', $dataComp);
    }

    // untuk masuk kesini 
    // http://localhost/.../blogs/tags
    public function tags()
    {
        $dataComp['baseUrl'] = $this->absUrl();
        $dataComp['script'] = "<script src='" . $this->absUrl() . "/assets/js/main.js'></script>";
        $dataComp['title'] = "Kategori Blog";
        $dataComp['useNav'] = true;

        $dataComp['pageComp'] = new PageComp(['blog', 'tags'], $this->absUrl());

        $this->view('templates/header', $dataComp);
        $this->view('blogs/list');
        $this->view('templates/footer', $dataComp);
    }

    // untuk masuk kesini 
    // http://localhost/.../blogs/search/$keyword
    public function search($keyword)
    {
        $dataComp['baseUrl'] = $this->absUrl();
        $dataComp['script'] = "<script src='" . $this->absUrl() . "/assets/js/main.js'></script>";
        $dataComp['title'] = "Mencari " . $keyword;
        $dataComp['useNav'] = true;

        $dataComp['pageComp'] = new PageComp(['blog', 'tags'], $this->absUrl());

        $this->view('templates/header', $dataComp);
        $this->view('blogs/list');
        $this->view('templates/footer', $dataComp);
    }

    // untuk masuk kesini 
    // http://localhost/.../blogs/create
    public function create()
    {
        // $dataComp['baseUrl'] = $this->absUrl();
        // $dataComp['script'] = "<script src='" . $this->absUrl() . "/assets/js/main.js'></script>";
        // $dataComp['title'] = "Mencari " . $keyword;
        // $dataComp['useNav'] = true;

        // $dataComp['pageComp'] = new PageComp(['blog', 'tags'], $this->absUrl());

        // $this->view('templates/header', $dataComp);
        // $this->view('blogs/list');
        // $this->view('templates/footer', $dataComp);
    }

    // untuk masuk kesini 
    // http://localhost/.../blogs/blog/$id
    public function blog($id)
    {
        if (isset($id)) {
            $dataComp['baseUrl'] = $this->absUrl();
            $dataComp['script'] = "
                <script src='" . $this->absUrl() . "/assets/js/main.js'></script>
                <script src='" . $this->absUrl() . "/assets/js/blog.js'></script>
            ";
            $dataComp['class-body'] = "bg-gray-100 font-sans leading-normal tracking-normal";
            $dataComp['title'] = "Blog";
            $dataComp['useNav'] = true;

            $dataComp['pageComp'] = new PageComp(['blog'], $this->absUrl());

            $this->view('templates/header', $dataComp);
            $this->view('blogs/blog');
            $this->view('templates/footer', $dataComp);
        } else {
            header('location:' . $this->absUrl());
        }
    }
}
