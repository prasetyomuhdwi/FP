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
        // $data["listBlogs"] = $mBlogs->getAllBlogs("all");
        $data["result"] = [
            "blogs" => [
                0 => [
                    "id" => 1,
                    "poster_path" => "https://dummyimage.com/720x400",
                    "tags_id" => "Tanaman Hias,Tanaman Obat,Tanaman Pangan",
                    "title" => "Cara Menanam Kunyit",
                    "created_at" => "12 Jan 2022",
                    "countLike" => 100,
                    "countBookmark" => 10,
                    "summary" => "Kunyit adalah tanaman obat alami yang sangat banyak kegunaannya bagi kehidupan kita mulai dari pewarna, obat, dan lainnya",
                ],
                1 => [
                    "id" => 2,
                    "poster_path" => "https://dummyimage.com/720x400",
                    "tags_id" => "Tanaman Hias,Tanaman Obat,Tanaman Pangan",
                    "title" => "Cara Menanam Kunyit",
                    "created_at" => "12 Jan 2022",
                    "countLike" => 100,
                    "countBookmark" => 10,
                    "summary" => "Kunyit adalah tanaman obat alami yang sangat banyak kegunaannya bagi kehidupan kita mulai dari pewarna, obat, dan lainnya",
                ],
                2 => [
                    "id" => 3,
                    "poster_path" => "https://dummyimage.com/720x400",
                    "tags_id" => "Tanaman Hias,Tanaman Obat,Tanaman Pangan",
                    "title" => "Cara Menanam Kunyit",
                    "created_at" => "12 Jan 2022",
                    "countLike" => 100,
                    "countBookmark" => 10,
                    "summary" => "Kunyit adalah tanaman obat alami yang sangat banyak kegunaannya bagi kehidupan kita mulai dari pewarna, obat, dan lainnya",
                ],
            ],
            "pagination" => array(),
        ];

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

        $data["tagsAll"] = [
            0 => array(
                "id" => "1",
                "name" => "Tanaman",
            ),
            1 => array(
                "id" => "1",
                "name" => "Tanaman",
            ),
            3 => array(
                "id" => "1",
                "name" => "Tanaman",
            ),
        ];

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
        $dataComp['title'] = "Mencari " . $keyword;
        $dataComp['useNav'] = true;

        $dataComp['pageComp'] = new PageComp(['blog', 'tags'], $this->absUrl());

        $this->view('templates/header', $dataComp);
        $this->view('blogs/list', $data);
        $this->view('templates/footer', $dataComp);
    }

    // untuk masuk kesini 
    // http://localhost/.../blogs/create
    public function create()
    {
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

        $dataComp['title'] = "Buat Blog";
        $dataComp['useNav'] = true;

        $dataComp['pageComp'] = new PageComp(['blog'], $this->absUrl());

        $this->view('templates/header', $dataComp);
        $this->view('blogs/create', $data);
        $this->view('templates/footer', $dataComp);
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

            $dataComp['pageComp'] = new PageComp(['blog'], $this->absUrl());

            $this->view('templates/header', $dataComp);
            $this->view('blogs/blog', $data);
            $this->view('templates/footer', $dataComp);
        } else {
            header('location:' . $this->absUrl());
        }
    }
}
