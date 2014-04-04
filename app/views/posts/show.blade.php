@extends('layouts.master')

@section('content')

<div class="blog-post">
	<h2 class="blog-post-title">{{{ $post->title }}}</h2>
	<p class="blog-post-meta">Original Post Date: {{{ $post->created_at->format('l, F jS Y @ h:i A ') }}} </p>
	<p class="blog-post-meta">Last Update: {{{ $post->updated_at->format('l, F jS Y @ h:i A ') }}} </p>
	<p id="post_body"> 
		{{ $post->body }}
	</p>
	<div>
		@if ($post->img_path)
			<img src="/{{{$post->img_path}}}">
		@endif
	</div>
</div>	

<hr>
<div>
	@if (Auth::check())
	@if (Auth::user()->canManagePost($post))
	<a href= "" id="btnDeletePost" >Delete Post</a> |

	<a href= "{{{ action('PostsController@edit', $post->id)}}}">Edit Post</a> |
	@endif
	@endif
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
<hr>
<div>
	    <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'reynablogdev'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
    
</div>

@stop