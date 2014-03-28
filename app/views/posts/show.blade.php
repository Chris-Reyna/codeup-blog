@extends('layouts.master')

@section('content')

<div class="blog-post">
	<h2 class="blog-post-title">{{{ $post->title }}}</h2>
	<p class="blog-post-meta">{{{ $post->created_at }}} <a href="#">Link</a></p>
	<p> 
		{{{ $post->body }}}
	</p>
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