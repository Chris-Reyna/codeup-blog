@extends('layouts.master')

@section('content')

<form id="creator" class="form" action="{{{ action('PostsController@store') }}}" method="post">
	<div>
		<label for="Title">Title</label>
		<input type="text" id="Title" name="Title" value="{{{ Input::old('Title')}}}">
	</div>
	<div>
		<label for="Body">Body</label>
		<textarea id="Body" name="Body" rows="10" cols="100" >{{{ Input::old('Body')}}}</textarea>
	</div>
	<button type="submit">Create New Post</button>
</form>



@stop