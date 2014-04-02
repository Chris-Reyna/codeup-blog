@extends('layouts.master')

@section('content')

{{Form::open(array('action' => array('PostsController@index'), 'method' => 'GET'))}}
{{Form::text('search') }}
{{Form::submit('Search') }}
{{Form::close()}}			
@foreach($posts as $post)		
<div class="blog-post">
	<a class="blog-post-title" href= "{{{ action('PostsController@show', $post->id)}}}"><h2>{{{ $post->title }}}</h2></a>
	<p class="blog-post-meta">Original Post Date: {{{ $post->created_at->format('l, F jS Y @ h:i A ') }}}</p>
	<p class="blog-post-meta">Last Update: {{{ $post->updated_at->format('l, F jS Y @ h:i A ') }}}</p>
	<p class="blog-post-meta">Author: {{{ $post->user->firstname }}} {{{ $post->user->lastname }}}</p>
	<p id="post_body">
		{{{ Str::words($post->body, 10) }}}
	</p>
</div>			
@endforeach					
			
<hr>
{{ $posts->appends(array('search' => Input::get('search')))->links()}}
<div>
	<a href= "{{{ action('PostsController@create')}}}">Create New Post</a>
</div>



@stop