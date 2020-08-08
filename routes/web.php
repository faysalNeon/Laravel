<?php

use App\User;
use Illuminate\Support\Str;

Route::view('/', 'welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/set',function(){
    $name = Str::random(5);
//    User::create([
//        'name' =>  $name."wootap",
//        'email' => $name."@wootap.me",
//        'password' => "12345678"
//    ]);
    (new User)->jkono();
//
//    foreach (User::active()->get() as $res) {
//        echo $res->name.' => '.$res->email.' => '.$res->password.' => '.$res->details.' <br/> ------------------------------ <br/>';
//    }
//dd(User::all());
});
Route::get('/clear',function(){
   User::truncate();
   echo "all user are clear";
});


