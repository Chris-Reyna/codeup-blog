<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Blog</title>
	   <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
  <link href="/css/signin.css" rel="stylesheet">
  <link href="/css/font-awesome.css" rel="stylesheet">
	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
	 <script src="/js/jquery.js"></script>
   <script src="/ckeditor/ckeditor.js"></script> 
     <style type="text/css">

	   #main-content{
	     padding: 50px;
	   }
     .content {
      padding-top: 100px;
     }
	    #navi{
      		padding-bottom: 150px;
    	}
      #masthead{
        padding-top: 100px;
      }
      #post_body{
        font-size: 20;
        color: #88BB74;

      }
	   </style>

	   @yield('topscript')
</head>
<body>
	<!-- Nav bar -->
	<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar -collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{{ action('HomeController@showHome') }}}">CR WEB PAGE</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a></li>
              <li><a href="{{{ action('HomeController@showResume') }}}">Resumé</a></li>
              <li><a href="{{{ action('PostsController@index') }}}">Blog</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Social Media<b class="caret "></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="https://twitter.com/creyna">Twitter</a></li>
                    <li><a href="https://www.linkedin.com/in/christopherreyna">Linkedin</a></li>
                    <li><a href="https://github.com/Chris-Reyna">GitHub</a></li>
                  </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              @if(Auth::check())
              <li><a href="{{{ action('HomeController@logout') }}}">Logout ({{{ Auth::user()->email }}})</a></li>
              @else
              <li><a href="{{{ action('HomeController@showLogin') }}}">Login</a></li>
              @endif
              <li class="active"><a href="./">Fixed top</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div><!--Nav Bar ends-->
    <div class="container" id="main-content">
      @if (Session::has('successMessage'))
    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
    @endif
    @if (Session::has('errorMessage'))
    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
    @endif
      @yield('content')
    </div>
    @yield('bottom-script')
    <hr>
    <div><a href="{{ URL::previous() }}">Go Back</a></div>
</body>
</html>