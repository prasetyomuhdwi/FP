<?php
session_start();

class Api extends Controller
{
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
