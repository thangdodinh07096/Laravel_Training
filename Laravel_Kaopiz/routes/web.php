<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', 'UserController@loginForm')->name('login.form');
Route::post('/', 'UserController@login')->name('login.check');
Route::get('/registerform', 'RegisterController@registerForm');
Route::post('/register', 'RegisterController@register');
Route::get('/blog', 'PostController@index')->name('blog.index');
Route::get('/showPost/{id?}', 'PostController@show')->name('post.show');
Route::get('/createPost', 'PostController@create')->name('post.create');
Route::post('/storePost', 'PostController@store')->name('post.store');
Route::get('/editPost/{id?}', 'PostController@edit')->name('post.edit');
Route::put('/updatePost/{id?}', 'PostController@update')->name('post.update');
Route::delete('/deletePost/{id?}', 'PostController@delete')->name('post.delete');
Route::post('/storeComment/{id?}', 'CommentController@store')->name('comment.store');

