<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
		<title>Starter Template - Poverty</title>

		<!-- CSS  -->
		<link href="./css/poverty.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="./css/font-awesome.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<script src="./js/poverty.js" async></script>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="crossorigin="anonymous"></script>


	</head>
	<body class="Site">
		<div class="Site-content content">
			<div class="sidebar" id="side">
				<div class="overlay sideToggle"></div>
				<div class="sideHeader" style="text-align:center;">
					<img  style="width:60%; margin:auto;display:block"src="img/sloth.jpg">
					<br>
					<span >Welcome:
						<?php
						if(isset($_SESSION['username']))
						{
							echo $_SESSION['username'];
						}
						?>
						<a class="button raised" href="./php/logout.php">logout</a>
					</span>
				</div>
				<div class="sideBody">
					<ul class="sideToggle">
						<li>
							<a href="#">Home</a>
						</li>
						<li>
							<a href="#">About</a>
						</li>
						<li>
							<a href="#">Contact</a>
						</li>
						<li><a href="#">Other</a></li>
					</ul>
				</div>
			</div>

			<script>
				$(document).on('scroll', function (e) {
					var x=($(document).scrollTop() / 100);
					if (x>0.9) {
						x=0.9;
					}
					$('.navbar').css('background', 'rgba(70,40,125,' + x + ')');
				});
			</script>

			<style>
				.navbar {
					background:rgba(70,40,125,0);
				}
			</style>
			<style>
				.rotate {
					transform-origin: 50.05% 58.58%;
					display:table-cell;
					vertical-align:top;
					-webkit-animation: cssAnimation .8s infinite  linear;
					-moz-animation: cssAnimation .8s infinite  linear;
					-o-animation: cssAnimation .8s infinite linear;
				}
				#topLeft,#bottomRight
				{
					animation-delay: .1s;
				}
				@-webkit-keyframes cssAnimation {
					from { -webkit-transform: rotate(0deg) ;}
					to { -webkit-transform: rotate(360deg) ; }
				}
				@-moz-keyframes cssAnimation {
					from { -moz-transform: rotate(0deg); }
					to { -moz-transform: rotate(360deg); }
				}
				@-o-keyframes cssAnimation {
					from { -o-transform: rotate(0deg) ; }
					to { -o-transform: rotate(360deg) ; }
				}

				#layer1 {
					-webkit-animation: bob 1.3s infinite  ease-in-out;
					-moz-animation: bob 1.3s infinite  ease-in-out;
					-o-animation: bob 1.3s infinite ease-in-out;
					animation-direction: alternate;
				}

				@-webkit-keyframes bob {
					from { -webkit-transform: scale(1) ;}
					to { -webkit-transform: scale(.95) ; }
				}
				@-moz-keyframes bob {
					from { -moz-transform: scale(1); }
					to { -moz-transform: scale(.95); }
				}
				@-o-keyframes bob {
					from { -o-transform: scale(1) ; }
					to { -o-transform: scale(.95) ; }
				}


			</style>

			<nav class="fixed navbar">
				<a href="#!"
				   <?php
				   if(isset($_SESSION['username']))
				   {
					   echo'class="logo sideToggle"';
				   }else
				   {
					   echo'class="logo"';
				   }
				   ?>
				   class="logo" style="height:64px;">
					<?php include("drawingTest.html"); ?>

				</a>
				<!--<img src="/assets/hamburger.svg" alt="Kiwi standing on oval">-->
				<ul class="right hide-on-med-and-down">
					<li><a href="#!">PROJECTS</a></li>
					<li><a href="#!" class="navbutton">DONATE</a></li>
					<li><a href="login.php">LOGIN</a></li>
				</ul>

				<?php
				if(isset($_SESSION['username']))
				{
					echo'<ul class="right hide-on-large-only">
					<li><a href="#" class="sideToggle"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
				</ul>';
				}
				?>


			</nav>
