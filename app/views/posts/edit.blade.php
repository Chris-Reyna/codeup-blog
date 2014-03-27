@extends('layouts.master')

@section('content')
{{ Form::open(array('action' => 'PostsController@edit')) }}
	<div>

	</div><h1>EDIT POST</h1>

	<div>
		{{ Form::label('title', 'Title') }}
		{{ Form::text('title') }}
		{{$errors->has('title') ? $errors->first('title', '<span class="help-block">:message</span>'):''}}
	</div>
	<div>
		{{ Form::label('body','Body')}}
		{{ Form::textarea('body')}}
		{{$errors->has('body') ? $errors->first('body', '<span class="help-block">:message</span>'):''}}
	</div>
	<div>
		{{ Form::submit('Create New Post')}}
	</div>
{{ Form::close() }}




@stop