<?php
include("./php/template/topNav.php");
?>
<div class="banner">
	<div style="position:absolute; background:linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.5),rgba(0,0,0,0)); height:100%; width:100%;"></div>
	<div class="valign content">
		<div class="container">
			<p>A <span class="secondary">Front and Backend</span> Framework</p>
			<h1>4Dev<span style="color:white; word-spacing:0;"> • </span>Welcome</h1>
			<p>Made <span class="secondary">By developers</span> for<span class="secondary"> developers</span></p>
		</div>
	</div>
	<div class="imgDiv"style="background: url(https://wallpaperscraft.com/image/vancouver_night_panorama_87255_2560x1080.jpg)"></div>

	<a class="button floating"><i class="fa fa-download fa-2x" aria-hidden="true"></i></a>
</div>

<div class="container">
	<div class="section">
		<div class="row">
			<h4 class="center editable" id="racingHead"></h4>
			<h5 class="primary center editable" id="racingSubHead"></h5>
			<br>
			<div class="col s12 m4 center">
				<i class="fa fa-plus fa-5x"></i>
				<h5 class="editable" id="indexSubheader1"></h5>
				<p class="editable" id="paragraph1"></p>
			</div>
			<div class="col s12 m4 center">
				<i class="fa fa-plus fa-5x"></i>
				<h5 class="editable" id="indexSubheader2"></h5>
				<p class="editable" id="paragraph2"></p>
			</div>
			<div class="col s12 m4 center">
				<i class="fa fa-plus fa-5x"></i>
				<h5 class="editable" id="indexSubheader3"></h5>
				<p class="editable" id="paragraph3"></p>
			</div>
			<div class="shittyAddBanner valign">
				<div class="row valign" style="width:100%;">
					<div class="col s2" style="height:100%;">
						<?php include("./img/icon.html"); ?>
					</div>
					<div class="col s8">
						<h4 class="white-text editable" id="hireus">Hire Us<br><span class="secondary">We Are Poor</span></h4>
					</div>
					<div class="button raised"><a style="color:white;" href="https://www.linkedin.com/in/michael-brooks-26799693/">Please</a></div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="imgSection">
	<div class="imgDiv" style="background: url(https://wallpaperscraft.com/image/vancouver_night_panorama_87255_2560x1080.jpg)"></div>
	<div class="valign">
		<h1 class="white-text editable" id="banner1">Drone Love Forever</h1>
	</div>
</div>
<!--PROJECTS AND EVENTS-->
<div class="container">
	<div class="section">
		<h4 class="center editable" id="quadHead">• What's in a Quad •</h4>

		<h5 class="primary center editable" id="quadSubHead">
			FPV racing is an exciting new sport that combines high-tech drones and high-speed racing.</h5>
		<br>
		<div class="row">
			<p>An FPV racing quadcopter is made up of the following parts:</p>
			<div class="col s12 m6" >
				<ul class="editable" id="list1">
				</ul>
			</div>
			<div class="col s12 m6">
				<ul class="editable" id="list2">
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
<?php include("./php/template/botNav.php"); ?>
