@extends('layouts.master')

@section('content')

<div class="blog-post">
	<h2 class="blog-post-title">{{{ $post->title }}}</h2>
	<p class="blog-post-meta">Original Post Date: {{{ $post->created_at->format('l, F jS Y @ h:i A ') }}} </p>
	<p class="blog-post-meta">Last Update: {{{ $post->updated_at->format('l, F jS Y @ h:i A ') }}} </p>
	<p id="post_body"> 
		{{{ $post->body }}}
	</p>
	<div>
		@if ($post->img_path)
			<img src="/{{{$post->img_path}}}">
		@endif
	</div>
</div>	

<hr>
<div>
	<a href= "" id="btnDeletePost" >Delete Post</a> |

	<a href= "{{{ action('PostsController@edit', $post->id)}}}">Edit Post</a> |

	<a href= "{{{ action('PostsController@index')}}}">Return to Posts Listing</a>
</div>

{{Form::open(array('action' => array('PostsController@destroy', $post->id), 'method' => 'delete', 'id' => 'formDeletePost'))}}
{{Form::close()}}
@stop

@section('bottom-script')

<script>
	$('#btnDeletePost').on('click', function (e){
		e.preventDefault();
		if(confirm('Are you sure you want to delete this post?')){
			$('#formDeletePost').submit();
		}
	});
</script>
@stop