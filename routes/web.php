
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

use Illuminate\Http\Request;

Route::get('/', "HomeController@index");

Route::post("/store/comment", "CommentsController@store_comment")->name("storecomment");

Route::post("/store/post", "PostsController@store_post")->name("storepost");

Route::get("/show/post/{id}","PostsController@show_post")->name("showpost");

Route::post("/store/post/comment", "CommentsController@store_post_comment")->name("storepostcomment");

Route::post("/delete/post", "PostsController@delete_post")->name("deletepost");

Route::get("/edit/post/{id}","PostsController@edit_post")->name("editpost");

Route::post("update/post","PostsController@update_post")->name("updatepost");