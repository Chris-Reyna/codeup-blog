<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Blog</title>
	   <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">
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
	   </style>

	   @yeild('topscript')
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
            <a class="navbar-brand" href="{{{ action('HomeController@showWelcome') }}}">CR WEB PAGE</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="{{{ action('HomeController@showPortfolio') }}}">Portfolio</a></li>
              <li><a href="{{{ action('HomeController@showResume') }}}">Resumé</a></li>
              <li><a href="{{{ action('HomeController@showBlog') }}}">Blog</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Assignments<b class="caret "></b></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li class="dropdown-header">Nav header</li>
                    <li><a href="#">Separated link</a></li>
                    <li><a href="#">One more separated link</a></li>
                  </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="../navbar/">Default</a></li>
              <li><a href="../navbar-static-top/">Static top</a></li>
              <li class="active"><a href="./">Fixed top</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
    </div><!--Nav Bar ends-->
    <div class="container" id="main-content">
      @yield('content')
    </div>
</body>
</html>