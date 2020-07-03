<?php
Route::get('/', 'Home@index')->name('home');
Route::get('/about/{id?}', 'Home@about')->name('onno');
Route::post('/demo', 'Home@post');
Route::put('/demo', 'Home@put');
Route::delete('/demo', 'Home@delete');
// student
Route::prefix('student')->namespace('Home')->group(function(){
    Route::get('/', 'Student@index');
    Route::get('/class', 'Student@class');
    Route::get('/role', 'Student@role');
});

Route::resource('my-res', 'mydemo');