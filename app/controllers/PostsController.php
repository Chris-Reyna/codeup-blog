<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//This shows all posts
		$posts = Post::all();
		return View::make('posts.index')->with('posts', $posts);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{	
		$input = Input::all();
		Log::info($input);
		// create the validator
    	$validator = Validator::make($input, Post::$rules);
	
    	// attempt validation
    	if ($validator->fails())
    	{
    	    // validation failed, redirect to the post create page with validation errors and old inputs
    	    return Redirect::back()->withInput()->withErrors($validator);
    	}
    	else
    	{
        	// validation succeeded, create and save the post
    		//Save to DB
			$title = Input::get('title');
			$body = Input::get('body');
			$post = new Post();
			$post->title = $title;
			$post->body = $body;
			$post->save();
		
			return Redirect::action('PostsController@index');
    	}

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::findOrFail($id);
		//show a post for /posts/show/id
		return View::make('posts.show')->with('post', $post);
	
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return "Shows a form for editing a post";
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return "Updates the post";
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return "Deletes a post";
	}

}