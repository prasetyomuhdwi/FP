<?php
// Class ini berfungsi mengatur 
// halaman Blog dan sejenisnya
class Blogs extends Controller
{
    public function index()
    {
        $dataComp['baseUrl'] = $this->absUrl();
        $dataComp['script'] = "<script src='" . $this->absUrl() . "/assets/js/main.js'></script>";
        $dataComp['title'] = "Semua Blog";
        $dataComp['useNav'] = true;

        $dataComp['pageComp'] = new PageComp(['blog', 'all'], $this->absUrl());

        $this->view('templates/header', $dataComp);
        $this->view('blogs/list');
        $this->view('templates/footer', $dataComp);
    }

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

    public function blog($id)
    {
        var_dump($id);
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
