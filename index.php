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

			<nav class="fixed navbar">
				<a href="#" class="logo sideToggle"><img src="http://1.bp.blogspot.com/-ata3-fQGA1M/UUxnSdNHqAI/AAAAAAAAAFI/Kb0gJs4YY_k/s1600/4.png" ></a>
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
					<img src="http://www.multivu.com/players/English/7728251-drl-the-drone-racing-league/image/fpv-drone-tech-2-HR.jpg">
					<div class="container">
						<p>A <span class="secondary">Front End and Back End</span><br class="hide-on-med-and-up"> web development framework <span class="secondary">society</span></p>
						<h1>4Dev<span style="color:white; word-spacing:0;"> • </span>Mrcd</h1>
						<p>Built <span class="secondary">For developers by developers</span></p>
					</div>
				</div>
				<a class="button floating"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a>
			</div>

			<!--PROJECTS AND EVENTS-->
			<div class="container">
				<div class="section">
					<h4 class="center">• CORE Features •</h4>
					<br>
					<div class="row">
						<div class="col s12 m8 center">
							<div class="imgcard">
								<img src="img/filler3.jpg">
								<p>Drone 1</p>
							</div>
						</div>

						<div class="col s12 m4 center">
							<div class="imgcard">
								<img src="img/filler2.jpg" class="responsive-img">
								<p>Drone 2</p>
							</div>
						</div>
						<div class="col s12 m4 center">
							<div class="imgcard">
								<img src="img/filler3.jpg">
								<p>Drone 3</p>
							</div>
						</div>
					</div>

					<div class="row">
						<!--<div class="col s12 m2"></div>-->
						<div class="col s12 m4 center">
							<div class="imgcard">
								<img src="img/filler2.jpg">
								<p>Drone 4</p>
							</div>
						</div>

						<div class="col s12 m8 center">
							<div class="imgcard">
								<img src="img/filler3.jpg">
								<p>Drone 5</p>
							</div>
						</div>

						<!--<div class="col s12 m2"></div>-->
					</div>
				</div>
			</div>


			<div class="imgSection background1 valign">
				<div class="imgSectionText center">
					<h1 class="white-text">More Words</h1>
				</div>
			</div>



			<div class="container">
				<div class="section">
					<img src="http://citris.ucmerced.edu/sites/default/files/citris_research_locations_0.png" class="responsive-img">
					<br>
					<br>

					<p>Established in 2001, the Center for Information Technology Research in the
						Interest of Society (CITRIS) leverages the interdiscipinary research strengths of <a>UC
						Berkeley</a>, <a>Davis</a>, <a>Merced</a> and <a>Santa Cruz</a> to advance the University of California’s
						mission and the innovative spirit of California. The institute was created to shorten
						the pipeline between world-class laboratory research and the development of
						impactful applications, platforms, companies, and even new industries</p>
					<br>
					<p>The technology landscape changes quickly. We believe the next 20 years
						will be dominated by unprecedented connectivity through sensor networks
						and mobile devices, increasing volume and velocity of data streams,
						advances in enabling materials such as nanotechnologies—and the growing
						imperative to align these innovations with societal needs. </p>
					<br>
					<p>Through partnerships with industry, government agencies, and the private sector, CITRIS has led development of innovations in <a>nanotechnology</a>, <a>computer science</a>, <a>engineering</a>, <a>manufacturing</a>, <a>social media</a> and other fields. With an annual operating budget of $4M-$5M from the University of California, CITRIS researchers have generated more than $95M per year in research grants and contracts from outside organizations. </p>
					<br>
					<p>Interdisciplinary programs and state-of-the-art facilities at Berkeley, Davis, Merced and Santa Cruz produce cutting edge research and creative work. Faculty and students translate those innovations into real-world applications and contributions to California’s economy, including the launch of 41 start-up companies. Read more about how these companies are doing <a>here</a>.</p>
					<br>
					<p>CITRIS works to find solutions to many of the concerns that face all of us today, from monitoring the environment and finding viable, sustainable energy alternatives to simplifying health care delivery and developing secure systems for electronic medical records and remote diagnosis, all of which will ultimately boost economic productivity.</p>
					<br>
					<div class="hr"></div>
					<div class="shittyAddBanner valign">
						<div class="row valign" style="width:100%;">
							<div class="col s2" style="height:100%;"><i class="fa fa-grav fa-5x secondary" aria-hidden="true"></i></div>
							<div class="col s8">
								<h4 class="white-text">Learn about our<br><span class="secondary">Other Projects</span></h4>
							</div>
							<div class="button raised">Button</div>
						</div>
					</div>
				</div>
			</div>

			<!--WHO WE ARE-->
			<div class="container">
				<div class="section">
					<h4 class="center">• Our Mission •</h4>
					<p class="primary">The Center for Information Technology Research in the Interest of Society (CITRIS) creates information technology solutions for many of our most pressing social, environmental, and health care problems.</p>

					<div class="row">
						<div class="col s12 m6">
							<h5>Collaboration</h5>
							<p>CITRIS facilitates partnerships and collaborations among more than 300 faculty members and thousands of students with industrial researchers from over 60 corporations.</p>
						</div>
						<div class="col s12 m6">
							<h5>Technology</h5>
							<p>The information technology research with state-of-the-art facilities creating products for the benefit of society—distinguishes us from other interdisciplinary research centers.</p>
						</div>
						<div class="col s12 m6">
							<h5>Innovation</h5>
							<p>CITRIS has pioneered this model, providing an “invention infrastructure” that creates physical or online products along with the process to support continuous innovation.</p>
						</div>
						<div class="col s12 m6">
							<h5>Inspiration</h5>
							<p>As a university-based research center, we are committed to meeting UC’s educational mission and sparking the desire to Learn among students and faculty alike.</p>
						</div>
						<div class="col s12 m6">
							<h5>Real Results</h5>
							<p>The real opportunities lay not just in developing new and innovative technologies, but in applying them</p>
						</div>
						<div class="col s12 m6">
							<h5>World Class Research</h5>
							<p>With our cutting-edge laboratories and renowned faculty experts, CITRIS serves as an incubator for translating new ideas into working prototypes.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="imgSection background1 valign">
				<div class="imgSectionText center">
					<h1 class="white-text">More Words</h1>
				</div>
			</div>


			<!--WHO WE ARE-->
			<div class="container">
				<div class="section">

					<h4 class="center">• Donate to CITRIS •</h4>
					<p>Whether you're looking to support our <a>ongoing projects</a> or become a <a>sponsor of the 2016 Mobile App Challenge</a>, we're always looking for your support. We accept contributions through the UC Merced Giving website. Tap the button below to continue.</p>
					<a type="button" class="button raised">Donate</a>
				</div>


			</div>

		</div><!-- END CONTENT-->

		<footer class="page-footer">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5 class="white-text">Footer Content</h5>
						<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
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
					© 2014 Copyright CITRIS All Rights Reserved
					<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
					<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
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
