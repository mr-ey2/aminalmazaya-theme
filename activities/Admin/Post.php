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
        $realTimestampt = substr($request['published_at'], 0, 10);
        $request['published_at'] = date("Y-m-d H:i:s", (int)$realTimestampt);
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
        $category = $db->select('SELECT * FROM posts WHERE id = ?', [$id])->fetch();

        require_once(BASE_PATH . '/template/admin/posts/edit.php');
    }
    public function update($request, $id)
    {
        $db = new DataBase();
        $db->update('posts', $id, array_keys($request), $request);
        $this->redirect('admin/category');
    }

    public function delete($id)
    {
        $db = new DataBase();
        $db->delete('posts', $id);
        $this->redirect('admin/category');
    }
}
