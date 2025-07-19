<?php

namespace Admin;

use database\DataBase;

class Post extends Admin
{
    private function getPostsWithJoins()
    {
        $db = new DataBase();
        $sql = "SELECT
        posts.* ,
        users.username AS user_name ,
        categories.name AS category_name
        FROM
        posts
        LEFT JOIN
        users ON posts.user_id = users.id
        LEFT JOIN
        categories ON posts.cat_id = categories.id 
        ORDER BY id ASC";
        $posts = $db->select($sql);
        return $posts ? $posts->fetchAll() : [];
    }




    public function index()
    {
        $posts = $this->getPostsWithJoins();
        require_once(BASE_PATH . '/template/admin/posts/index.php');
    }



    public function create()
    {
        $db = new DataBase();
        $categories = $db->select("SELECT * FROM categories ORDER BY id ASC");
        require_once(BASE_PATH . '/template/admin/posts/create.php');
    }



    public function store($request)
    {
        $request['published_at'] = date("Y-m-d H:i:s", strtotime($request['published_at']));
        $db = new DataBase();
        if ($request['cat_id'] != null) {
            $request['image'] = $this->saveImage($request['image'], 'post-image');
            if ($request['image']) {
                $request = array_merge($request, ['user_id' => 1]);
                $db->insert('posts', array_keys($request), $request);
                $this->redirect('admin/post');
            } else {
                $this->redirect('admin/post');
            }
        } else {
            $this->redirect('admin/post');
        }
    }



    public function edit($id)
    {
        $db = new DataBase();
        $post = $db->select('SELECT * FROM posts WHERE id = ?', [$id])->fetch();
        $categories = $db->select("SELECT * FROM categories ORDER BY id ASC");
        require_once(BASE_PATH . '/template/admin/posts/edit.php');
    }



    public function update($request, $id)
    {
        $request['published_at'] = date("Y-m-d H:i:s", strtotime($request['published_at']));
        $db = new DataBase();
        if ($request['cat_id'] != null) {
            if ($request['image']['tmp_name'] != null) {

                $post = $db->select('SELECT * FROM posts WHERE id = ?', [$id])->fetch();
                $this->removeImage($post['image']);
                $request['image'] = $this->saveImage($request['image'], 'post-image');
            } else {
                unset($request['image']);
            }
            $request = array_merge($request, ['user_id' => 1]);
            $db->update('posts', $id, array_keys($request), $request);
            $this->redirect('admin/post');
        }else{
            $this->redirect('admin/post');
        }
    }



    public function delete($id)
    {
        $db = new DataBase();
        $post = $db->select('SELECT * FROM posts WHERE id=?;', [$id])->fetch();
        $this->removeImage($post['image']);
        $db->delete('posts', $id);
        $this->redirectBack();
    }




    public function selected($id)
    {
        $db = new DataBase();
        $post = $db->select('SELECT * FROM posts WHERE id=?;', [$id])->fetch();
        if (empty($post)) {
            $this->redirectBack();
        }
        if ($post['selected'] == 0) {
            $db->update('posts', $id, ['selected'], [1]);
        } else {
            $db->update('posts', $id, ['selected'], [0]);
        }
        $this->redirectBack();
    }




    public function breakingNews($id)
    {
        $db = new DataBase();
        $post = $db->select('SELECT * FROM posts WHERE id=?;', [$id])->fetch();
        if (empty($post)) {
            $this->redirectBack();
        }
        if ($post['breaking_news'] == 0) {
            $db->update('posts', $id, ['breaking_news'], [1]);
        } else {
            $db->update('posts', $id, ['breaking_news'], [0]);
        }
        $this->redirectBack();
    }
}
