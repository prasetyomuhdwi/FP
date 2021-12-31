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
                $data["table"] = $table;
                $dataComp['title'] = "Edit Blog";
                break;
            case 'tag':
                $mTag = new TagsMiddleware;
                // $data["tag"] = $mTag->getTagById((int)$id);
                $data["table"] = $table;
                $dataComp['title'] = "Edit Tag";
                break;
            case 'user':
                $mUser = new UsersMiddleware;
                $data["user"] = $mUser->getUserById((int)$id);
                $data["table"] = $table;
                $dataComp['title'] = "Edit User";
                break;
            case 'comment':
                $mComment = new CommentsMiddleware;
                // $data["comment"] = $mComment->getCommentById((int)$id);
                $data["table"] = $table;
                $dataComp['title'] = "Edit Comment";
                break;
            default:
                header("location: " . $this->absUrl() . "/baas");
                break;
        }

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
