<?php
session_start();

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
    public function insert($table)
    {
        switch ($table) {
            case 'blog':
                $mBlog = new BlogsMiddleware;
                $mBlog->insert();
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
}
