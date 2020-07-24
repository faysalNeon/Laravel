<?php
// use Illuminate\Http\Request;
// Route::get('/', 'HomeController@index')->name('home');
// Route::get('/{lang?}', function ($lang='en') {
//     App::setLocale($lang);
//     return view('language');
// });

// Route::group(['prefix' => '/{lang?}'], function ($lang='en') {
//     $language=$lang;
//     Route::get('/', function () {
//         return view('language');
//     });
// })->middleware('customOne');

// Route::post('/', function (Request $req) {
//     $req->session()->put('lang',$req->lang);
//     return redirect('/');
// });

// Auth::routes();

Route::get('/', 'HomeController@index');
Route::view('/new', 'language');
