<?php
// Class ini berfungsi mengatur 
// single page seperti About us
// Home (index), 404, 403, 500

class Page extends Controller
{
    // untuk masuk kesini 
    // http://localhost/.../page
    public function index()
    {
        $dataComp['baseUrl'] = $data['baseUrl'] = $this->absUrl();
        $dataComp['css'] = "<link rel='stylesheet' href='" . $this->absUrl() . "/assets/css/style.css'>";
        $dataComp['script'] = "<script src='" . $this->absUrl() . "/assets/js/main.js'></script>";
        $dataComp['title'] = "Beranda";
        $dataComp['useNav'] = true;

        $dataComp['pageComp'] = new PageComp([], $this->absUrl());
        $mTags = new TagsMiddleware;
        $mBlogs = new BlogsMiddleware;

        $data['top3Tags'] = $mTags->getAllLatestTags();
        $data['blogLatest'] = $mBlogs->getAllLatestBlogs();
        $data['blogPopular'] =
            [
                0 => array(
                    "id" => 1,
                    "poster_path" => "https://dummyimage.com/720x400",
                    "tags_id" => "Tanaman Hias,Tanaman Obat,Tanaman Pangan",
                    "title" => "Cara Menanam Kunyit",
                    "countLike" => 100,
                    "countBookmark" => 10,
                    "summary" => "Kunyit adalah tanaman obat alami yang sangat banyak kegunaannya bagi kehidupan kita mulai dari pewarna, obat, dan lainnya",
                ),
                1 => array(
                    "id" => 2,
                    "poster_path" => "https://dummyimage.com/720x400",
                    "tags_id" => "Tanaman Hias,Tanaman Obat,Tanaman Pangan",
                    "title" => "Cara Menanam Kunyit",
                    "countLike" => 100,
                    "countBookmark" => 10,
                    "summary" => "Kunyit adalah tanaman obat alami yang sangat banyak kegunaannya bagi kehidupan kita mulai dari pewarna, obat, dan lainnya",
                ),
                2 => array(
                    "id" => 3,
                    "poster_path" => "https://dummyimage.com/720x400",
                    "tags_id" => "Tanaman Hias,Tanaman Obat,Tanaman Pangan",
                    "title" => "Cara Menanam Kunyit",
                    "countLike" => 100,
                    "countBookmark" => 10,
                    "summary" => "Kunyit adalah tanaman obat alami yang sangat banyak kegunaannya bagi kehidupan kita mulai dari pewarna, obat, dan lainnya",
                ),
            ];

        $this->view('templates/header', $dataComp);
        $this->view('page/index', $data);
        $this->view('templates/footer', $dataComp);
    }

    // untuk masuk kesini 
    // http://localhost/.../page/about
    public function about()
    {
        $dataComp['baseUrl'] = $this->absUrl();
        $dataComp['css'] = "<link rel='stylesheet' href='" . $this->absUrl() . "/assets/css/style.css'>";
        $dataComp['script'] = "<script src='" . $this->absUrl() . "/assets/js/main.js'></script>";
        $dataComp['title'] = "Tentang Kami";
        $dataComp['useNav'] = true;

        $dataComp['pageComp'] = new PageComp(['about'], $this->absUrl());

        $this->view('templates/header', $dataComp);
        $this->view('page/about');
        $this->view('templates/footer', $dataComp);
    }

    // untuk masuk kesini 
    // http://localhost/.../page/notFound
    public function notFound()
    {
        $err = new ErrorsComp(404);
        $data['errMsg'] = $err->errorMsg();

        $dataComp['baseUrl'] = $data['baseUrl'] = $this->absUrl();
        $dataComp['title'] = $data['errMsg']['title'];
        $dataComp['useNav'] = false;

        $this->view('templates/header', $dataComp);
        $this->view('page/errorPage', $data);
        $this->view('templates/footer', $dataComp);
    }

    // untuk masuk kesini 
    // http://localhost/.../page/forbidden
    public function forbidden()
    {
        $err = new ErrorsComp(403);
        $data['errMsg'] = $err->errorMsg();

        $dataComp['baseUrl'] = $data['baseUrl'] = $this->absUrl();
        $dataComp['title'] = $data['errMsg']['title'];
        $dataComp['useNav'] = false;

        $this->view('templates/header', $dataComp);
        $this->view('page/errorPage', $data);
        $this->view('templates/footer', $dataComp);
    }

    // untuk masuk kesini 
    // http://localhost/.../page/internalServerError
    public function internalServerError()
    {
        $err = new ErrorsComp(500);
        $data['errMsg'] = $err->errorMsg();

        $dataComp['baseUrl'] = $data['baseUrl'] = $this->absUrl();
        $dataComp['title'] = $data['errMsg']['title'];
        $dataComp['useNav'] = false;

        $this->view('templates/header', $dataComp);
        $this->view('page/errorPage', $data);
        $this->view('templates/footer', $dataComp);
    }
}
