@extends('layouts.master')

@section('content')
						<!--add a comma and the class or id after postcontroller for styling-->
{{ Form::open(array('action' => 'PostsController@store', 'files' => true)) }}
	<div>
		{{ Form::label('title', 'Title') }}
		{{ Form::text('title') }}
		{{$errors->first('title', '<span class="help-block">:message</span>')}}
	</div>
	<div>
		{{ Form::label('body','Body')}}
		{{ Form::textarea('body')}}
		{{$errors->first('body', '<span class="help-block">:message</span>')}}
	</div>
	<div>
		{{ Form::file('image')}}
	</div>
	<br>
	<div>
		{{ Form::submit('Create New Post')}}
	</div>
	<script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'body' );
    </script>
{{ Form::close() }}

@stop