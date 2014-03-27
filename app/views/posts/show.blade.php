@extends('layouts.master')

@section('content')

<div class="blog-post">
	<h2 class="blog-post-title">{{{ $post->title }}}</h2>
	<p class="blog-post-meta">{{{ $post->created_at }}} <a href="#">Link</a></p>
	<p> 
		<textarea class="form-control" rows="3">{{{ $post->body }}}</textarea>
	</p>
</div>	

<hr>
<div>
	<a href= "{{{ action('PostsController@edit', $post->id)}}}">Edit Post</a>
</div>
<div>
	<a href= "{{{ action('PostsController@index')}}}">Return to Posts Listing</a>
</div>



@stop