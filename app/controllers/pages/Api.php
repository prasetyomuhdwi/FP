<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

class Api extends Controller
{
    // untuk masuk kesini 
    // http://localhost/.../api/edit/$table/$id
    public function edit($table, $id)
    {
        switch ($table) {
            case 'blog':
                $mBlog = new BlogsMiddleware;
                // $data["blog"] = $mBlog->getBlogById((int)$id);
                $dataComp['title'] = "Edit Blog";
                break;
            case 'tag':
                $mTag = new TagsMiddleware;
                // $data["tag"] = $mTag->getTagById((int)$id);
                $dataComp['title'] = "Edit Tag";
                break;
            case 'user':
                $mUser = new UsersMiddleware;
                $data["user"] = $mUser->getUserById((int)$id);
                $dataComp['title'] = "Edit User";
                break;
            case 'comment':
                $mComment = new CommentsMiddleware;
                // $data["comment"] = $mComment->getCommentById((int)$id);
                $dataComp['title'] = "Edit Comment";
                break;
            default:
                header("location: " . $this->absUrl() . "/baas");
                break;
        }

        $data["table"] = $table;
        $dataComp['baseUrl'] = $data['baseUrl'] = $this->absUrl();
        $dataComp['css'] = "
                <link rel='stylesheet' href='" . $this->absUrl() . "/assets/css/style.css'>
                ";

        $dataComp['script'] = "
                <script src='" . $this->absUrl() . "/assets/js/main.js'></script>
                <script src='" . $this->absUrl() . "/assets/js/baas.js'></script>
                ";

        $dataComp['useNav'] = true;

        $dataComp['pageComp'] = new PageComp([], $this->absUrl());

        $this->view('templates/header', $dataComp);
        $this->view('baas/edit', $data);
        $this->view('templates/footer', $dataComp);
    }
    // untuk masuk kesini 
    // http://localhost/.../api/delete/$table/$id
    public function delete($table, $id)
    {
        switch ($table) {
            case 'blog':
                $mBlog = new BlogsMiddleware;
                $mBlog->delete((int)$id);
                $page = new Accounts;
                $page->profile();
                die();
                break;
            case 'tag':
                $mTag = new TagsMiddleware;
                break;
            case 'user':
                $mUser = new UsersMiddleware;
                break;
            case 'comment':
                $mComment = new CommentsMiddleware;
                break;
            case 'like':
                $mLike = new LikesMiddleware;
                break;
            case 'bookmark':
                $mBookmark = new BookmarksMiddleware;
                break;
            default:
                var_dump($table);
                die();
                break;
        }
    }
    // untuk masuk kesini 
    // http://localhost/.../api/update/$table/$id
    public function update($table, $id)
    {
        switch ($table) {
            case 'blog':
                $mBlog = new BlogsMiddleware;
                $tags_id = implode(",", $_POST['tags_id']) . ",";

                if (empty($_POST['user_id'])) {
                    $user_id = $_SESSION['user']["id"];
                    $username = $_SESSION['user']["username"];
                } else {
                    $user_id = $_POST['user_id'];
                }

                $summary = $this->dataCleaner($_POST['summary']);
                $title = $this->dataCleaner($_POST['title']);
                $content = $this->dataCleaner($_POST['content']);

                if (!empty($_POST["status"])) {
                    $status = "publish";
                } else {
                    $status = "draf";
                }

                if (!empty($_FILES["poster_path"])) {
                    $libUpFile = new UploadFile(false, "poster_path");
                    $poster_path = $libUpFile->blog($_FILES["poster_path"], $username, $title);

                    if (!is_array($poster_path)) {
                        $mBlog->update($id, $tags_id, $title, $content, $summary, $status, $poster_path);
                    } else {
                        $_SESSION["registerErr"] = $poster_path;
                        header("location: " . $this->absUrl() . "/blogs/create/");
                        die();
                    }
                } else {
                    $mBlog->update($id, $tags_id, $title, $content, $summary, $status, null);
                }
                break;
            case 'tag':
                $mTag = new TagsMiddleware;
                break;
            case 'user':
                $mUser = new UsersMiddleware;
                $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
                $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
                $fullname = filter_var($_POST['fullname'], FILTER_SANITIZE_STRING);
                $bio = filter_var($_POST['bio'], FILTER_SANITIZE_STRING);

                $email = $this->dataCleaner($email);
                $bio = $this->dataCleaner($bio);
                $username = $this->dataCleaner($username);
                $fullname = $this->dataCleaner($fullname);

                $mUser->update((int) $id, $username, $fullname, $email, $bio);
                break;
            case 'comment':
                $mComment = new CommentsMiddleware;
                break;
            case 'like':
                $mLike = new LikesMiddleware;
                break;
            case 'bookmark':
                $mBookmark = new BookmarksMiddleware;
                break;
            default:
                var_dump($table);
                die();
                break;
        }
    }
    // untuk masuk kesini 
    // http://localhost/.../api/insert/$table/$id
    public function insert($table, $param = null)
    {
        switch ($table) {
            case 'blog':
                $mBlog = new BlogsMiddleware;
                $tags_id = implode(",", $_POST['tags_id']) . ",";

                if (empty($_POST['user_id'])) {
                    $user_id = $_SESSION['user']["id"];
                    $username = $_SESSION['user']["username"];
                } else {
                    $user_id = $_POST['user_id'];
                }

                $summary = $this->dataCleaner($_POST['summary']);
                $title = $this->dataCleaner($_POST['title']);
                $content = $this->dataCleaner($_POST['content']);

                if (!empty($_POST["status"])) {
                    $status = "publish";
                } else {
                    $status = "draf";
                }

                if (!empty($_FILES["poster_path"])) {
                    $libUpFile = new UploadFile(false, "poster_path");
                    $poster_path = $libUpFile->blog($_FILES["poster_path"], $username, $title);

                    if (!is_array($poster_path)) {
                        $mBlog->insert($tags_id, $user_id, $title, $summary, $content, $poster_path, $status);
                    } else {
                        $_SESSION["registerErr"] = $poster_path;
                        header("location: " . $this->absUrl() . "/blogs/create/");
                        die();
                    }
                } else {
                    $mBlog->insert($tags_id, $user_id, $title, $summary, $content, NULL, $status);
                }

                break;
            case 'tag':
                $mTag = new TagsMiddleware;
                break;
            case 'user':
                $mUser = new UsersMiddleware;
                break;
            case 'comment':
                $mComment = new CommentsMiddleware;
                $comment = $this->dataCleaner($_POST['comment']);

                $param = str_replace("b=", "", $param);
                $param = str_replace("p=", "", $param);
                $param = explode(",", $param);

                if (count($param) > 1) {
                    $blog_id = $param[0];
                    $parent_id = $param[1];
                } else {
                    $blog_id = $param[0];
                    $parent_id = 0;
                }

                $user_id = $_SESSION["user"]["id"];

                $mComment->insert($blog_id, $user_id, $comment, $parent_id);
                break;
            case 'like':
                $mLike = new LikesMiddleware;
                break;
            case 'bookmark':
                $mBookmark = new BookmarksMiddleware;
                break;
            default:
                var_dump($table);
                die();
                break;
        }
    }
}
