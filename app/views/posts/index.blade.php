@extends('layouts.master')

@section('content')


				
@foreach($posts as $post)		
<div class="blog-post">
	<a class="blog-post-title" href= "{{{ action('PostsController@show', $post->id)}}}"><h2>{{{ $post->title }}}</h2></a>
	<p class="blog-post-meta">{{{ $post->created_at }}} <a href="#">Link</a></p>
	<p> 
		<textarea class="form-control" rows="3">{{{ $post->body }}}</textarea>
	</p>
</div>			
@endforeach					
			
<hr>
<div>
	<a href= "{{{ action('PostsController@create')}}}">Create New Post</a>
</div>
<div>
	<a href= "{{{ action('PostsController@show')}}}">View A Post</a>
</div>


@stop