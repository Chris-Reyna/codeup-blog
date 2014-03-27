@extends('layouts.master')

@section('content')
						<!--add a comma and the class or id after postcontroller for styling-->
{{ Form::open(array('action' => 'PostsController@store')) }}
<!--<form id="creator" class="form" action="{{{ action('PostsController@store') }}}" method="post">-->
	<div>
		<!--<label for="title">Title</label>-->
		<!--<input type="text" id="title" name="title" value="{{{ Input::old('title')}}}">-->
		<!--for styling add (title,null or '',array('class'=> 'whatever', 'placeholder'=> 'title', etc))-->
		{{ Form::label('title', 'Title') }}
		{{ Form::text('title') }}
		{{$errors->first('title', '<span class="help-block">:message</span>')}}
	</div>
	<div>
		<!--<label for="body">Body</label>-->
		<!--<textarea id="body" name="body" rows="10" cols="100" >{{{ Input::old('body')}}}</textarea>-->
		{{ Form::label('body','Body')}}
		{{ Form::textarea('body')}}
		{{$errors->first('body', '<span class="help-block">:message</span>')}}
	</div>
	<!--<button type="submit">Create New Post</button>-->
	<div>
		{{ Form::submit('Create New Post')}}
	</div>
<!--</form>-->
{{ Form::close() }}










@stop