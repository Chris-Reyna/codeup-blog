<?php

class UsersController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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
		$user = User::findOrFail($id);
		// create the validator
    	$validator = Validator::make($input, User::$rules);
	
    	// attempt validation
    	if ($validator->fails())
    	{
    	    // validation failed, redirect to the post create page with validation errors and old inputs
    	    Session::flash('errorMessage', 'User was NOT Created Successfully!!');
    	    return Redirect::back()->withInput()->withErrors($validator);
    	}
    	}
    	else
    	{
        	// validation succeeded, create and save the post
    		//Save to DB
    		//add image
    		
    		$firstname = Input::get('firstname');
			$lastname = Input::get('lastname');
			$post = new Post();
			$user->firstname = $firstname;
			$user->lastname = $lastname;
			$user->save();
			$user->save();
			Session::flash('successMessage', 'User Created Successfully');
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
		$user = User::findOrFail($id);
		//show a post for /posts/show/id
		return View::make('users.show')->with('user', $user);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::findOrFail($id);
		
		return View::make('users.edit')->with('user', $user);
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
		$user = User::findOrFail($id);
		// create the validator
    	$validator = Validator::make($input, User::$rules);
	
    	// attempt validation
    	if ($validator->fails())
    	{
    	    // validation failed, redirect to the post create page with validation errors and old inputs
    	    Session::flash('errorMessage', 'User Info was NOT Updated Successfully!!');
    	    return Redirect::back()->withInput()->withErrors($validator);
    	}
    	else
    	{
        	// validation succeeded, update and save the post
    		//Save to DB
    		//
			$firstname = Input::get('firstname');
			$lastname = Input::get('lastname');
			$user->firstname = $firstname;
			$user->lastname = $lastname;
			$user->save();
		}
		$user->save();
			Session::flash('successMessage', 'Updated Successfully');
			return Redirect::action('PostsController@show',$user->id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}