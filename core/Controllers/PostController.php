<?php

namespace Controllers;

class PostController extends BaseController
{
    public function create()
    {
        return view('post/create');
    }

    public function createPost()
    {
        if(has_session(id))
            return redirect();

        $errors = [];

        if(!isset($_POST['name'])) $errors['name'][] = 'Поле не существует!';
        if(!isset($_POST['keywords'])) $errors['keywords'][] = 'Поле не существует!';
        if(!isset($_POST['description'])) $errors['description'][] = 'Поле не существует!';

        if(!empty($_POST['name'])) $errors['name'][] = 'Поле не заполнено!';
        if(!empty($_POST['keywords'])) $errors['keywords'][] = 'Поле не заполнено!';
        if(!empty($_POST['description'])) $errors['description'][] = 'Поле не заполнено!';

        if($errors !=[])
            return view('posts/create', compact('errors'));

        $inputs=$_POST;
        $inputs=['user_id']=session('id');
        $inputs=['created_at']=date('d-m-y H;i;s');

        $post=new Post();
        $post->create($inputs);

        return  view('posts/create', ['success' => true]);
    }
}