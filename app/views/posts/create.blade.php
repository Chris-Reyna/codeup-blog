@extends('layouts.master')

@section('content')

<form id="creator" class="form" action="{{{ action('PostsController@store') }}}" method="post">
	<div>
		<label for="title">Title</label>
		<input type="text" id="title" name="title" value="{{{ Input::old('title')}}}">
		{{$errors->has('title') ? $errors->first('title', '<span class="help-block">:message</span>'):''}}
	</div>
	<div>
		<label for="body">Body</label>
		<textarea id="body" name="body" rows="10" cols="100" >{{{ Input::old('body')}}}</textarea>
		{{$errors->has('body') ? $errors->first('body', '<span class="help-block">:message</span>'):''}}
	</div>
	<button type="submit">Create New Post</button>
</form>



@stop