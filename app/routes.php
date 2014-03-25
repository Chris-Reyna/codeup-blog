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

Route::get('/', 'HomeController@showWelcome');

Route::get('/resume','HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/blog', 'HomeController@showBlog' );

Route::resource('posts', 'PostsController');



Route::get('/sayhello/{name}', function($name)
{

	$data = array(
		'name' => $name
		);

    return View::make('my-first-view')->with($data);
});

Route::get('/rolldice/{guess}', function($guess)
{
	$roll = rand(1,6);
	if ($roll == $guess){
		$message = "Your guess was Correct!";
	}else{
		$message = "Your guess was WRONG!!";
	}

	$data = array(
		'roll' => $roll,
		'guess' => $guess,
		'message' => $message
		);

	return View::make('roll-dice')->with($data);


});












