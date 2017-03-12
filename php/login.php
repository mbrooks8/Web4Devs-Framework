<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
		<title>Starter Template - Poverty</title>
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<meta name="google-signin-client_id" content="413698421344-c39mjtvkgs6svj4nipudj61uflfsjr31.apps.googleusercontent.com">

		<!-- CSS  -->
		<link href="../css/poverty.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="../css/font-awesome.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<script src="../js/poverty.js" async></script>
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
				transform-origin: 50% 50%;
				-webkit-animation: bob 1.7s infinite  ease-in-out;
				-moz-animation: bob 1.7s infinite  ease-in-out;
				-o-animation: bob 1.7s infinite ease-in-out;
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
			<div class="card center" style="background-color:rgba(0,0,0,0.2);color:white;">

				<div  style="width:30%;display:inline-block;">
					<?php include("../img/icon.html"); ?>
				</div>

				<form action="./sessionManager.php" method="POST">
					<br>
					Username:<br>
					<input type="text" name="username"><br><br>
					Password:<br>
					<input type="password" name="password">
					<br><br>
					<div class="center">
						<input class="button raised" type="submit" value="login">
					</div>
				</form>
				<div class="g-signin2" data-onsuccess="onSignIn"></div>
				<script>
					function onSignIn(googleUser) {
						var profile = googleUser.getBasicProfile();
						var id_token = googleUser.getAuthResponse().id_token;

						var xhr = new XMLHttpRequest();
						xhr.open('POST', './googleSessionManager.php');
						xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
						xhr.onload = function() {
							if (xhr.responseText=="success"){
								window.location = "http://web4devs.com/";
							}else{
								alert("Wrong Email");
							}

						};
						xhr.send('email=' + profile.getEmail());
					}
				</script>
			</div>
		</div>
	</body>
</html>
