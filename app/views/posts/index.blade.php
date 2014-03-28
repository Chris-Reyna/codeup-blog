@extends('layouts.master')

@section('content')


				
@foreach($posts as $post)		
<div class="blog-post">
	<a class="blog-post-title" href= "{{{ action('PostsController@show', $post->id)}}}"><h2>{{{ $post->title }}}</h2></a>
	<p class="blog-post-meta">Original Post Date: {{{ $post->created_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A ') }}} </p>
	<p class="blog-post-meta">Last Update: {{{ $post->updated_at->setTimezone('America/Chicago')->format('l, F jS Y @ h:i A ') }}} </p>
	<p> 
		{{{ Str::words($post->body, 10) }}}
	</p>
</div>			
@endforeach					
			
<hr>
{{ $posts->links()}}
<div>
	<a href= "{{{ action('PostsController@create')}}}">Create New Post</a>
</div>



@stop