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
    return view('home');
});

// Posts
Route::get('/posts', 'PostsController@index')->name('post.index');
Route::post('/posts', 'PostsController@store')->name('post.store');
Route::get('/posts/create', 'PostsController@create')->name('post.create');
Route::get('/posts/{post}', 'PostsController@show')->name('post.show');
Route::patch('/posts/{post}', 'PostsController@update')->name('post.update');
Route::get('/posts/{post}/edit', 'PostsController@edit')->name('post.edit');
Route::delete('/posts/{post}', 'PostsController@destroy')->name('post.delete');
