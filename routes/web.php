<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('posts', ['as' => 'posts.index', 'uses' => function () {
    return view('index');
}]);

Route::get('post', ['as' => 'posts.post', 'uses' => function () {
    return view('post');
}]);

Route::get('about', ['as' => 'posts.about', 'uses' => function () {
    return view('about');
}]);

Route::get('contact', ['as' => 'posts.contact', 'uses' => function () {
    return view('contact');
}]);