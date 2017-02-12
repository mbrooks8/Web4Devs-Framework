<?php
$user = true;
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
		<style>
			<?php
			if($user)
			{
				echo ".editable
        {

        }.editWrapper
        {
            min-height:10px;
            margin-top:20px;
            padding: 5px 10px;
            position:relative;
            border:solid 1px lightgray;
            border-radius: 5px;
			z-index:-1;
        }
        .editButton, .addTemplateButton
        {
            position: absolute;
            top: -13px;
            right: 20px;
            height: 26px;
            width: 26px;
            background: white;
            border-radius: 50%;
            box-shadow: 0px 0px 5px 1px #5F5F5F;
        }
        .editableTemplate
        {
            min-height:10px;
            margin-top:20px;
            padding: 5px 10px;
            position:relative;
            border:solid 1px lightgray;
            border-radius: 5px;
        }
                .submitArea
        {
            min-height: 200px;
            max-width: 100%;
        }
        ";
			}
			?>

		</style>
	</head>

	<body class="Site">
		<div class="Site-content content">
			<div class="sidebar" id="side">
				<div class="overlay sideToggle"></div>
				<div class="sideHeader" style="text-align:center;">
					<img  style="width:60%; margin:auto;display:block"src="http://www.accrinet.com/images/3030_orig.png">
					<br>
					<span >Welcome: userName</span>
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

			</style>

			<nav class="fixed navbar">
				<a href="#" class="logo sideToggle" style="height:64px;">
					<?php include("drawingTest.html"); ?>

				</a>
				<!--<img src="/assets/hamburger.svg" alt="Kiwi standing on oval">-->
				<ul class="right hide-on-med-and-down">
					<li><a href="#!">PROJECTS</a></li>
					<li><a href="#!" class="navbutton">DONATE</a></li>
					<li><a href="#!">SEARCH</a></li>
				</ul>

				<ul class="right hide-on-large-only">
					<li><a href="#" class="sideToggle"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
				</ul>

			</nav>

			<div class="banner">
				<div class="imgDiv valign">
					<div style="position:absolute; background:linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.5),rgba(0,0,0,0)); height:100%; width:100%;"></div>
					<img src="http://www.multivu.com/players/English/7728251-drl-the-drone-racing-league/image/fpv-drone-tech-2-HR.jpg">
					<div class="container">
						<p><span class="secondary">Revolutionizing</span> Sports and Technology</p>
						<h1>4Dev<span style="color:white; word-spacing:0;"> • </span>4fpv</h1>
						<p>Bringing <span class="secondary">Skill and Precision</span> to The<span class="secondary"> Next Level</span></p>
					</div>
				</div>
				<a class="button floating"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a>
			</div>

			<div class="container">
				<div class="section">
					<div class="row">
						<h4 class="center">• FPV Racing •</h4>

						<h5 class="primary center">
							FPV racing is an exciting new sport that combines high-tech drones and high-speed racing.</h5>
						<br>

						<div class="col s12 m4">
							<img class="responsive-img" src="http://blog.dronetrest.com/content/images/2016/05/helipal-com-storm-racing-drone-f1.jpg">
						</div>

						<div class="col s12 m8">
							<p>
							FPV, or First-Person-View, is a way of drone racing involving a mounted camera on the drone that relays real-time information back to the pilot (and viewers) through a pair of goggles. <br>Drone racing requires lightning-fast decision making and reactions in ways few other sports demand, with drone speeds up to 120 mph. With the tension and adrenaline induced by the high-stakes races, FPV racing has developed a passionate community eager to demonstrate and propagate the excitement of drone racing.</p>
						</div>
					</div>

					<div class="shittyAddBanner valign">
						<div class="row valign" style="width:100%;">
							<div class="col s2" style="height:100%;">
								<?php include("drawingTest.html"); ?>
							</div>
							<div class="col s8">
								<h4 class="white-text">Hire Us<br><span class="secondary">We Are Poor</span></h4>
							</div>
							<div class="button raised">Please</div>
						</div>
					</div>

				</div>
			</div>

			<div class="valign imgSection">
				<img src="http://blog.dronetrest.com/content/images/2016/05/helipal-com-storm-racing-drone-f1.jpg">
				<div>
					<h1 class="white-text">Drone Love Forever</h1>
				</div>
			</div>
			<!--PROJECTS AND EVENTS-->
			<div class="container">
				<div class="section">
					<h4 class="center">• What's in a Quad •</h4>

					<h5 class="primary center">
						FPV racing is an exciting new sport that combines high-tech drones and high-speed racing.</h5>
					<br>
					<div class="row">
						<p>An FPV racing quadcopter is made up of the following parts:</p>
						<div class="col s12 m6">
							<ul>
								<li>Frame</li>
								<li>4 motors</li>
								<li>4 ESCs</li>
								<li>4 props</li>
								<li>Flight controller</li>
								<li>Lithium-polymer (LiPo) battery</li>

							</ul>
						</div>
						<div class="col s12 m6">
							<ul>
								<li>Video transmitter (vTx) and receiver (vRx)</li>
								<li>Radio transmitter (Tx) and receiver (Rx)</li>
								<li>Antennas</li>
								<li>Battery straps</li>
								<li>FPV goggles or monitor</li>
								<li>Board camera for FPV</li>

							</ul>
						</div>
						<p>You'll want to buy a lot of spare props. It also doesn't hurt to have spare batteries, motors and ESCs if you want to avoid waiting around for replacement parts after a crash.
						</p>
						<br>
						<p>To build and maintain a quadcopter you'll also need some tools, such as:</p>
						<ul>
							<li>LiPo charger</li>
							<li>Soldering iron</li>
						</ul>
						<p>The parts you choose will depend mostly on your budget. To see what parts we recommend, check out the Equipment section later in this guide.</p>
					</div>

				</div>
			</div>
			<style>
				h1{
					text-shadow: 1px 1px 8px #000000;
				}
			</style>

			<div class="valign imgSection">
				<img src="http://www.multivu.com/players/English/7923151-broadcast-media-announcement/image/drl-2016-season-is-here-2-HR.jpg">
				<div>
					<h1 class="white-text">YOUR Drone, YOUR way</h1>
				</div>
			</div>

			<!--##################################################################-->
			<div class="container">
				<div class="section">

					<h4 class="center">• EQUIPMENT - DIY •</h4>

					<h5 class="primary center">
						Your Bank Balance is Going to Suffer</h5>
					<br>
					<p>If you like building things, then taking the DIY approach to your first drone is great. For some drone racers, building the quad is half the fun.  In addition to being to have your custom drone look exactly as you want, the other advantage of building your own quad is that you'll have the knowledge and skills to fix it when you crash. The parts pictured below are available at https://www.foreverfpv.com/.

						<!-- end slipsum code --></p>
					<br>

					<div class="row">
						<div class="col s12 m8 center">
							<a href="https://www.foreverfpv.com/product/shendrones-krieger-200225/">
								<div class="imgcard">
									<img src="https://www.foreverfpv.com/wp-content/uploads/2016/09/krieger_1024x1024.jpg">
									<p>ShenDrones Krieger 200/225</p>
								</div>
							</a>
						</div>

						<div class="col s12 m4 center">
							<div class="imgcard">
								<img src="http://gettbs.in/image/cache/catalog/motor/LUM7-500x500.jpg
										  " class="responsive-img">
								<p>Lumenier RX2206-11 2350Kv
								</p>
							</div>
						</div>
						<div class="col s12 m4 center">
							<div class="imgcard">
								<img src="https://images-na.ssl-images-amazon.com/images/I/91WrbKsb3UL._SL1500_.jpg
										  ">
								<p>RaceKraft 5051 TCS
								</p>
							</div>
						</div>
					</div>

					<div class="row">
						<!--<div class="col s12 m2"></div>-->
						<div class="col s12 m4 center">
							<a href="https://www.foreverfpv.com/product/kiss-32bit-flight-controller-v1-06/">
								<div class="imgcard">
									<img src="https://oscarliang.com/ctt/uploads/2016/03/kiss-fc-flight-controller-top-3-1024x682.jpg">
									<p>KISS 24A Flight Controller
									</p>

								</div>
							</a>
						</div>

						<div class="col s12 m8 center">
							<a href="https://www.foreverfpv.com/product/kiss-32bit-flight-controller-v1-06/">
								<div class="imgcard">
									<img src="https://img.rcgroups.com/http://uploads.tapatalk-cdn.com/20160403/c9f696a78dedead76459a0be609231f6.jpg?h=3IKwvJVSLAWQD0OXh-Vrgw
											  ">
									<p>KISS 24A Race Edition ESC</p>
								</div>
							</a>
						</div>

						<!--<div class="col s12 m2"></div>-->
					</div>

					<p>To fully build your own drone, you will need more than the parts pictured above. For a full list of parts and specifications or reviews refer to the hyperlinks in the table below:</p>
				</div>
			</div>
			<div class="valign imgSection">
				<img src="http://www.realclearlife.com/wp-content/uploads/2016/09/GettyImages-539178636.jpg">
				<div>
					<h1 class="white-text">Show Off Your Skills</h1>
				</div>
			</div>
			<div class="container">
				<div class="section">

					<h4 class="center">• EQUIPMENT - DIY •</h4>

					<h5 class="primary center">
						Your Bank Balance is Going to Suffer</h5>
					<br>
					<p>After some practicing a bit, a great way to improve your skills, meet fellow fpv racers and even trade parts is going to local events. Here’s a list of some fpv racing groups and events located near Merced, CA.</p>
					<br>
					<p></p>
				</div>
			</div>


		</div><!-- END CONTENT-->

		<footer class="page-footer">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5 class="white-text">4Dev</h5>
						<p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
					</div>
					<div class="col l4 offset-l2 s12">
						<h5 class="white-text">Links</h5>
						<ul>
							<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					© 2014 Copyright 4Dev All Rights Reserved
					<a class="grey-text text-lighten-4 right" href="#!">Please Hire Us</a>
				</div>
			</div>
		</footer>

	</body>
	<script>
		$(".sideToggle").click(function(){
			$(".sidebar").toggleClass("active");
		})
	</script>
	<?php
	if($user)
	{
		echo '<script src="./js/editContent.js"></script>';
	}
	?>
	<script>
		/*Select all editable elements, and refresh the content from the database*/
		var editables = $(".editable");
		editables.each(function(){
			console.log("test");
			getContent($(this));
		});


		/*pull the content from the database, and update the screens content*/
		function getContent(elem)
		{
			console.log("getContent: "+elem[0].innerHTML);
			$.ajax({
				url: './php/getContent.php',
				type: 'GET',
				data: {
					"id": '"'+elem[0].id+'"',
					"content": '"'+elem[0].innerHTML+'"'
				},
				success: function(data) {
					var out = data;
					elem[0].innerHTML = out;
					<?php if($user){echo "addEditButton(elem);";}?>
				},
				error: function(e) {
					alert("oops");
				}
			});
		}

	</script>


</html>
