<?php

class PostsController extends BaseController {



	public function __construct()
	{
	    // call base controller constructor
	    parent::__construct();
	
	    // run auth filter before all methods on this controller except index and show
	    $this->beforeFilter('auth', ['except' => ['index', 'show']]);
	    $this->beforeFilter('post.protect', ['only' => ['edit', 'update', 'destroy']]);
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//search by title 
		$search = Input::get('search');
	
		if ($search){
	
			$posts = Post::with('user')->where('title','LIKE', "%{$search}%")->orWhere('body', 'LIKE',"%{$search}%")->paginate(4);
	
		}else{
			//This shows all posts
			$posts = Post::with('user')->orderBy('created_at','desc')->paginate(2);
		}
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
    	    Session::flash('errorMessage', 'Post was NOT Posted Successfully!!');
    	    return Redirect::back()->withInput()->withErrors($validator);
    	}
    	else
    	{
        	// validation succeeded, create and save the post
    		//Save to DB
    		//add image
    		
    		$user_id = Auth::user()->id;
			$title = Input::get('title');
			$body = Input::get('body');
			$post = new Post();
			$post->title = $title;
			$post->body = $body;
			$post->user_id = $user_id;
			//adding img, is there an img uploaded
			if (Input::hasFile('image'))
			{
				//retrieve file from user
				$image = Input::file('image');
			    $destinationPath = 'blog_img/';
			    $image->getClientOriginalName();
			    $extension = $image->getClientOriginalExtension();
			    //adding a unique id and adding extension
			    $imagename = uniqid() . '.' . $extension;
			    //move file to folder blog_img
			    $image->move($destinationPath,$imagename);
			    //store the path to the file in the post
			    $post->img_path = $destinationPath . $imagename;
			    
			}
			$post->save();
			Session::flash('successMessage', 'Posted Successfully');
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
		$post = Post::findOrFail($id);
		
		return View::make('posts.edit')->with('post', $post);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = Input::all();
		Log::info($input);
		$post = Post::findOrFail($id);
		// create the validator
    	$validator = Validator::make($input, Post::$rules);
	
    	// attempt validation
    	if ($validator->fails())
    	{
    	    // validation failed, redirect to the post create page with validation errors and old inputs
    	    Session::flash('errorMessage', 'Post was NOT Updated Successfully!!');
    	    return Redirect::back()->withInput()->withErrors($validator);
    	}
    	else
    	{
        	// validation succeeded, update and save the post
    		//Save to DB
    		//
			$title = Input::get('title');
			$body = Input::get('body');
			$post->title = $title;
			$post->body = $body;
			//adding img, is there an img uploaded
			if (Input::hasFile('image'))
			{
				//retrieve file from user
				$image = Input::file('image');
			    $destinationPath = 'blog_img/';
			    $image->getClientOriginalName();
			    $extension = $image->getClientOriginalExtension();
			    //adding a unique id and adding extension
			    $imagename = uniqid() . '.' . $extension;
			    //move file to folder blog_img
			    $image->move($destinationPath,$imagename);
			    //store the path to the file in the post
			    $post->img_path = $destinationPath . $imagename;
			    
			}
			if(Input::has('remove_img'))
			{
				File::delete(public_path() . '/' . $post->img_path);
				$post->img_path = null;
			}
			$post->save();
			Session::flash('successMessage', 'Updated Successfully');
			return Redirect::action('PostsController@show',$post->id);
		}
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::findOrFail($id);
		$post->delete();
		return Redirect::action('PostsController@index');
	}
}