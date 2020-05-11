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

Auth::routes();
Route::get('/backend', 'HomeController@index')->name('admin');
Route::get('/postsPage', 'postsController@show');
Route::get('/pagePosts', 'frontPostsController@getPosts');

//create Post
Route::post('/create', 'makePostController@makePost');

//image route
Route::post('upload', 'imageController@upload')->name('upload');

//Edit Post
Route::get('/editPosts/{id}', 'editPostController@editPost');
Route::post('/updatePost/{id}', 'editPostController@updatePost');

Route::get('/home', 'HomeController@index')->name('home');
