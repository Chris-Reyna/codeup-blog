@extends('layouts.master')

@section('content')

<div>
	<h1>EDIT POST</h1>
</div>
{{ Form::model($post, array('action' => array('PostsController@update', $post->id), 'method' => 'put', 'files' => true)) }}
	<div>
		{{ Form::label('title', 'Title') }}
		{{ Form::text('title') }}
		{{ $errors->first('title', '<span class="help-block">:message</span>')}}
	</div>
	<div>
		{{ Form::label('body','Body')}}
		{{ Form::textarea('body')}}
		{{ $errors->first('body', '<span class="help-block">:message</span>')}}
		<div>
			@if ($post->img_path)
			<img src="/{{{$post->img_path}}}">
			
		</div>
		<div>
			
				{{ Form::label('remove_img','Remove Image')}}
				{{ Form::checkbox('remove_img', true) }}
			@endif
		</div>
	</div>
	<div>
		{{ Form::file('image')}}
	</div>
	<br>
	<div>
		{{ Form::submit('Update Post')}}
	</div>
	<script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace( 'body' );
    </script>
{{ Form::close() }}




@stop