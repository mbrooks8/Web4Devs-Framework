<?php
include("./php/template/topNav.php");
?>
<div class="banner small">
	<div style="position:absolute; background:linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.5),rgba(0,0,0,0)); height:100%; width:100%;"></div>
	<div class="valign content">
		<div class="container">
			<h1 class="white-text">Buttons</h1>
			<p>Made <span class="secondary">By developers</span> for<span class="secondary"> developers</span></p>
		</div>
	</div>
	<div class="imgDiv"style="background: url(https://wallpaperscraft.com/image/vancouver_night_panorama_87255_2560x1080.jpg)"></div>

	<a class="button floating"><i class="fa fa-download fa-2x" aria-hidden="true"></i></a>
</div>

<div class="container">
	<div class="section">
		<div class="row">
			<br>
			<div class="col s12">
				<p>There are three standard types of buttons:</p>
				<ul class="editable" id="buttonlist2">
					<li>test</li>
				</ul>
			</div>
			<div class="row">
				<style>
					.thing{
						min-height: 256px;
					}
				</style>
				<div class="col s12 m3 l4 ">
					<div class="card flat thing center valign">
						<style>
							.button {
								box-shadow: none;
								display: inline-block;
								text-transform: uppercase;
								background-color: transparent;
								color: #42a8c2;
								border-radius: 2px;
								padding: 0.3rem 2rem;
								height: 36px;
								text-align: center;
								text-decoration: none;
								cursor: pointer;
								margin: .5rem .5rem;
								transition: background-color .2s;
							}
							.button i {
								font-size: 1.3rem;
								line-height: inherit;
							}
							.button:focus, .button:active {
								background-color: transparent;
							}
							.button:focus, .button:hover {
								background-color: rgba(0, 0, 0, 0.1);
								box-shadow: none;
							}
							.button:active {
								background-color: rgba(0, 0, 0, 0.2);
							}
							.button.raised {
								border: none;
								display: inline-block;
								text-transform: uppercase;
								vertical-align: middle;
								background-color: #42a8c2;
								font-size: 1.3rem;
								border-radius: 2px;
								height: 36px;
								padding: 0.3rem 2rem;
								color: #ffffff;
							}
							.button.raised:hover {
								background-color: #55b1c8;
							}
							.button.floatingg {
								display: inline-block;
								border: none;
								vertical-align: middle;
								overflow: hidden;
								height: 56px;
								width: 56px;
								border-radius: 50%;
								margin: 0;
								padding: 0;
								background-color: #f43284;
								color: #ffffff;
								cursor: pointer;
								z-index: 1;
							}
							.button.floatingg:hover {
								background-color: #f54a93;
							}
							.button.floatingg:before {
								border-radius: 0;
							}
							.button.floatingg i {
								width: inherit;
								display: inline-block;
								text-align: center;
								cursor: pointer;
								font-size: 1.5rem;
								line-height: 56px;
							}

						</style>
						<div class="button floatingg">
							<i class="fa fa-download fa-2x" aria-hidden="true"></i>
						</div>

					</div>
					<p class="editable" id="buttonfloatingbutton">Floating Button</p>
				</div>
				<div class="col s12 m3 l4 ">
					<div class="card flat thing center valign">
						<div class="button">Button</div>
					</div>
					<p class="editable" id="buttonflatbutton">Flat Button</p>
				</div>
				<div class="col s12 m3 l4 ">
					<div class="card flat thing center valign">
						<div class="button raised">Button</div>
					</div>
					<p class="editable" id="buttonraisedbutton">Raised Button</p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col s12 m4">
				<p>Choosing button style</p>
				<p>Choosing a button style depends on the primacy of the button, the number of containers on screen, and the screen layout.</p>
				<p>Function: Is it important and ubiquitous enough to be a floating action button?</p>
				<p>Dimension: Choose raised or flat depending on the container it will be in and how many z-space layers you have on screen. There should not be many layers of objects on the screen.</p>
				<p>Layout: Use primarily one type of button per container. Only mix button types when you have a good reason to, such as emphasizing an important function.</p>

			</div>
			<div class="col s12 m8">
				<img class="responsive-img" src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0Bx4BSt6jniD7RHFUU2dFdmMtcm8/components_buttons_usage_main.png">
			</div>
		</div>

		<div class="hr"></div>

	</div> <!--End section-->
</div>

<div class="imgSection">
	<div class="imgDiv" style="background: url(https://wallpaperscraft.com/image/vancouver_night_panorama_87255_2560x1080.jpg)"></div>
	<div class="valign">
		<h1 class="white-text editable" id="banner1"></h1>
	</div>
</div>
<!--PROJECTS AND EVENTS-->
<div class="container">
	<div class="section">
		<h4 class="center editable" id="quadHead"></h4>

		<h5 class="primary center editable" id="quadSubHead"></h5>
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
