@extends('layouts.master')

@section('content')

<form id="creator" class="form" action="{{{ action('PostsController@store') }}}" method="post">
	<div>
		<label for="title">Title</label>
		<input type="text" id="title" name="title" value="{{{ Input::old('Title')}}}">
	</div>
	<div>
		<label for="body">Body</label>
		<textarea id="body" name="body" rows="10" cols="100" >{{{ Input::old('Body')}}}</textarea>
	</div>
	<button type="submit">Create New Post</button>
</form>



@stop