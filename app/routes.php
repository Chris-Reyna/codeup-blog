<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showHome');

Route::get('/resume','HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

// Route::get('/posts/index', 'HomeController@showBlog' );

Route::resource('posts', 'PostsController');

// Route::get('orm-test', function () {
//     // test code here
//     $post1 = new Post();
// 	$post1->title = "Eloquent is awesome!";
// 	$post1->body = "It is super easy to create a new post.";
// 	$post1->save();
// });












