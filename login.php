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
	</head>

	<body class="Site">
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

			input
			{
				border-radius: 5px;
				border: none;
				font-size:20px;
				color: black;
			}
		</style>

		<div class="banner valign" style="min-height:100vh;height: 100vh !important;">
			<div class="card" style="background-color:rgba(0,0,0,0.2);color:white;">
				<form action="./sessionManager.php" method="POST">
					Username:<br>
					<input type="text" name="username"><br>
					Password:<br>
					<input type="password" name="password">
					<br>
					<div class="center">
						<input class="button raised" type="submit" value="login">
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
