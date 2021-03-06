@extends('layouts.master')
@section('topscript')
<head>
	<title>Whack-a-Vader</title>
	<style type="text/css">
	
		/* body css death star image*/
		body{
			background-image: url("/img/deathstar2.jpg");
			text-align: center;
		}
		#gamename{
			color: #FF0;
			font-size: 27;
		}
		/* img css for lightsaber cursor  */
		img {
			
			height: 200px;
			width: 200px;
			display: none;

		}
		.hole{
			border:2px solid #FF0;
			float: left;
			height: 200px;
			width: 200px;
		}
		#board, a:hover{
			cursor: url(http://cur.cursors-4u.net/others/oth-1/oth24.cur), progress 	!important;
			margin: 15px 25%;
			width: 600px;
			
		}
		#counter{
			color: #FF0;
		}
		#stats{
			float: left;
		}
		#start{
			background-color: #FF0;	
		}
		#timer{
			color: #FF0;
		}

	</style>
	<!--beginning of cursor code -->
	<a href="http://www.cursors-4u.com/cursor/2005/07/07/oth24.html" target="_blank" title="Star Wars Lightsaber">
		<img src="http://cur.cursors-4u.net/cursor.png" border="0" alt="Star Wars Lightsaber" style="position:absolute; top: 0px; right: 0px;" />
	</a>
	<!--end of cursor code -->
	<script src="/js/jquery.js"></script>
	
</head>
@stop
@section('content')
<body>
	<h1 id="gamename">WHACK-A-VADER</h1>
	<div id='stats'>
		<span id="dummy"></span>
		<!--adding button to start-->
		<input id="start" type="button" value="BATTLE"/>
		<div id="counter">STRIKES:0</div>
		<div id="timer">SEC LEFT: 25</div>
	</div>


	<div class='container'>  
		<div id='board'>
			<div class='hole'>
				<img src="img/vaderwhack.jpg">
			</div>
			<div class='hole'>
				<img src="img/vaderwhack.jpg">
			</div>
			<div class='hole'>
				<img src="img/vaderwhack.jpg">
			</div>
			<div class='hole'>
				<img src="img/vaderwhack.jpg">
			</div>
			<div class='hole'>
				<img src="img/vaderwhack.jpg">
			</div>
			<div class='hole'>
				<img src="img/vaderwhack.jpg">
			</div>
			<div class='hole'>
				<img src="img/vaderwhack.jpg">
			</div>
			<div class='hole'>
				<img src="img/vaderwhack.jpg">
			</div>
			<div class='hole'>
				<img src="img/vaderwhack.jpg">
			</div>
		</div>
	</div>

	<script type="text/javascript">
		var time = 25;
		var count = 0;
		var gameInterval;
		var holes = $('.hole');
		var action = function(){
			holes.children().fadeOut();
			var rand = Math.floor(Math.random() * holes.length);
			$(holes[rand]).children().fadeIn();
			$('#timer').html("SEC LEFT:" + time);
		};
		var countdown = function(){
			--time;
			if (time <= -1){
				clearInterval(gameInterval);
			}

		};

		$(".hole").children().click(function() {
    		count++;
    		$("#counter").html("STRIKES: "+count);
		});


		//adding button to start
		$('#start').click(function(){
			//jquery for image effect
			gameInterval = setInterval(action, 1000);
			
			gameTime = setInterval(countdown, 1000);
			
		});

		var audioElement = document.createElement('audio');
        audioElement.setAttribute('src', 'sound/obiwan_theforce1.wav');
        //audioElement.setAttribute('autoplay', 'autoplay');
        //audioElement.load()

        $.get();

        audioElement.addEventListener("load", function() {
            audioElement.play();
        }, true);

        $('#start').click(function() {
            audioElement.play();
        });

        var audioElement2 = document.createElement('audio');
        audioElement2.setAttribute('src', 'sound/lsclash1.wav');
        //audioElement.load()

        $.get();

        audioElement2.addEventListener("load", function() {
            audioElement2.play();
        }, true);

        $('.hole').children().click(function() {
            audioElement2.play();
        });

	</script>
</body>


@stop