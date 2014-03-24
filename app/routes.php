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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/resume', function()
{
        return "This is my resume";
});

Route::get('/portfolio', function()
{
        return "This is my portfolio";
});

// Route::get('/sayhello/{name}', function($name)
// {
//     if ($name == "Chris")
//     {
//         return Redirect::to('/');
//     }
//     else
//     {
//         return "Hello, $name!";
//     }
// });

Route::get('/sayhello/{name}', function($name)
{

	$data = array(
		'name' => $name
		);

    return View::make('my-first-view')->with($data);
});

Route::get('/rolldice/{roll}/{guess}', function($roll,$guess)
{
	$roll = rand(1,6);
	$data = array(
		'roll' => $roll,
		'guess' => $guess
		// 'message' => $message
		);
	// if ($roll == $guess){
	// 	$message = "Your guess was Correct!";
	// }else{
	// 	$message = "Your guess was WRONG!!";
	// }
	return View::make('roll-dice')->with($data);


});












