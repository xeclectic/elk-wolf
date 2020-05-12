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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts', function () {
    return view('posts');
});

Auth::routes();
Route::get('/backend', 'HomeController@index')->name('admin');
Route::get('/postsPage', 'postsController@show');
Route::get('/pagePosts', 'frontPostsController@getPosts');
Route::get('/viewPost/{id}', 'postsController@viewPost');

//create Post
Route::post('/create', 'makePostController@makePost');

//image route
Route::post('upload', 'imageController@upload')->name('upload');

//Edit Post
Route::get('/editPosts/{id}', 'editPostController@editPost');
Route::post('/updatePost/{id}', 'editPostController@updatePost');

//Delete Post
Route::get('delete/{id}', 'deletePostController@deletePost');

Route::get('/home', 'HomeController@index')->name('home');
