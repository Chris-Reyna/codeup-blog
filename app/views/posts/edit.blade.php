@extends('layouts.master')

@section('content')

<div>
	<h1>EDIT POST</h1>
</div>
{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'put')) }}
	<div>
		{{ Form::label('title', 'Title') }}
		{{ Form::text('title') }}
		{{ $errors->first('title', '<span class="help-block">:message</span>')}}
	</div>
	<div>
		{{ Form::label('body','Body')}}
		{{ Form::textarea('body')}}
		{{ $errors->first('body', '<span class="help-block">:message</span>')}}
	</div>
	<div>
		{{ Form::submit('Create New Post')}}
	</div>
{{ Form::close() }}




@stop