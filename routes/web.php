<?php

Route::get('/',function (){
    $data['post']=\App\Post::all();
    $data['com']=\App\Comment::all();
    $data['cat']=\App\Category::all();
    $data['tag']=\App\Tag::all();
    return view('welcome',compact('data'));
});
