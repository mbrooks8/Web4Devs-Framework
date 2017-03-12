<?php
include("./php/template/topNav.php");
?>
<link href="./css/prism.css" rel="stylesheet" />
<script src="./js/prism.js"></script>
<div class="banner small">
	<div style="position:absolute; background:linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.5),rgba(0,0,0,0)); height:100%; width:100%;"></div>
	<div class="valign content">
		<div class="container">
			<h1 class="white-text">Banners</h1>
			<p>Made <span class="secondary">By developers</span> for<span class="secondary"> developers</span></p>
		</div>
	</div>
	<div class="imgDiv"style="background: url(https://wallpaperscraft.com/image/vancouver_night_panorama_87255_2560x1080.jpg)"></div>

	<a class="button floating"><i class="fa fa-download fa-2x" aria-hidden="true"></i></a>
</div>
<div class="container">
	<br>
	<p>A lightweight, flexible component that can optionally extend the entire viewport to showcase key marketing messages on your site.</p>
	<br>
	<div class="col s12">
		<p>There are four standard types of banners:</p>
		<ul class="" id="bannerList1">
			<li>Default Banners: A big box for displaying at the top of the page</li>
			<li>Image Banners: a big box for calling extra attention to some special content or information.</li>
			<li>Shitty Add Banner: A shitty box for shit content that noone wants to actually see.</li>
		</ul>
	</div>
	<p>A jumbotron is displayed as a grey box with rounded corners. It also enlarges the font sizes of the text inside it.</p>
	<br>
	<div class="row">
		<div class="col s12 m6 l3">
			<div style="height:450px; background-color:#EEEEEE; position:relative;">
				<div class="banner" style="min-height:60% !important; height:60% !important;">
					<a style="height:30px; width:30px; bottom:-15px!important;" class="button floating"></a>
				</div>
			</div>
			<p class="black-text" id="bannerfloatingbutton">Default Banner</p>
		</div>
		<div class="col s12 m6 l3">
			<div style="height:450px; background-color:#EEEEEE; position:relative;">
				<div class="banner small" style="min-height:30% !important; height:30% !important;">

					<a style="height:30px; width:30px; bottom:-15px!important;" class="button floating"></a>
				</div>
			</div>
			<p class="black-text" id="bannerfloatingbutton">Small Banner</p>
		</div>
		<div class="col s12 m6 l3">
			<div style="height:450px; background-color:#EEEEEE; position:relative; padding-top:40%;">
				<div class="banner small" style=" min-height:40% !important; height:40% !important;">
				</div>
			</div>
			<p class="black-text" id="bannerfloatingbutton">Image Banner</p>
		</div>
		<div class="col s12 m6 l3">
			<div style="height:450px; background-color:#EEEEEE; position:relative; padding-top:70%;">
				<div class="shittyBanner">
				</div>
			</div>
			<p class="black-text" id="bannerfloatingbutton">Shitty Banner</p>
		</div>
	</div>

	<div class="row">

		<div class="col s12 l4">
			<h5 class="primary center " id="buttonChoosingButtonSTyle">Choosing Banner Style</h5>
			<br>
			<p class="" id="buttonGroup4">Choosing a button style depends on the primacy of the button, the number of containers on screen, and the screen layout.</p>
			<br>
			<p class="" id="buttonGroup3"><b>Function:</b> Is it important and ubiquitous enough to be a floating action button?</p>
			<br>
			<p class="" id="buttonGroup2"><b>Dimension:</b> Choose raised or flat depending on the container it will be in and how many z-space layers you have on screen. There should not be many layers of objects on the screen.</p>
			<br>
			<p class="" id="buttonGroup1"><b>Layout:</b> Use primarily one type of button per container. Only mix button types when you have a good reason to, such as emphasizing an important function.</p>
		</div>
		<div class="col s12 l8">
			<div class="card flat">
				<img class="responsive-img" src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0Bx4BSt6jniD7RHFUU2dFdmMtcm8/components_buttons_usage_main.png">
			</div>
		</div>
	</div>

	<br>
	<div class="divider"></div>
	<br>

	<div class="row">
		<div class="col s12 l4">
			<h5 class="primary center" id="buttonUsage">Usage</h5>
			<br>
			<p><b>Banner Types</b></p>
			<br>
			<p>The type of Banner used should be suited to where it appears.</p>
		</div>
		<div class="col s12 l8">
			<table class="bordered highlight">
				<thead>
					<tr>
						<th>Context</th>
						<th>Button type</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Top Of Page</td>
						<td>Use flat buttons in dialogs.</td>
					</tr>
					<tr>
						<td>Inline</td>
						<td>Depending on your layout, use raised buttons or flat buttons for inline buttons.</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div><!--end row-->

	<!--EXAMPLES GO HERE -->
	<h5>Default Banner</h5>
	<p>Flat buttons are printed on material. They do not lift, but fill with color on press.</p>
	<p>Use flat buttons in the following locations:</p>

	<pre><code class="language-markup">
&lt;div class="banner">
	&lt;div class="valign content">
		&lt;div class="container">
			&lt;h1>Test Banner&lt;/h1>
			&lt;p>Here is a test banner&lt;/p>
		&lt;/div>
	&lt;/div>
	&lt;div class="imgDiv" style="background: url(https://wallpaperscraft.com/image/vancouver_night_panorama_87255_2560x1080.jpg)">&lt;/div>
	&lt;a class="button floating">&lt;i class="fa fa-download fa-2x" aria-hidden="true">&lt;/i>&lt;/a>
&lt;/div>
		</code></pre>
	<br>

	<h5>Small Banner</h5>
	<p>To make a small banner, just add the small class to the banner.</p>
	<p>Small Banners are great for sub pages.</p>

	<pre><code class="language-markup">
&lt;div class="banner small">
	&lt;div class="valign content">
		&lt;div class="container">
			&lt;h1>Test Banner&lt;/h1>
			&lt;p>Here is a test banner&lt;/p>
		&lt;/div>
	&lt;/div>
	&lt;div class="imgDiv" style="background: url(https://wallpaperscraft.com/image/vancouver_night_panorama_87255_2560x1080.jpg)">&lt;/div>
	&lt;a class="button floating">&lt;i class="fa fa-download fa-2x" aria-hidden="true">&lt;/i>&lt;/a>
&lt;/div>
		</code></pre>

	<br>
	<h5>Image Banner</h5>
	<p>Flat buttons are printed on material. They do not lift, but fill with color on press.</p>
	<p>Use flat buttons in the following locations:</p>

	<pre><code class="language-markup">
&lt;div class="imgBanner">
	&lt;div class="imgDiv" style="background: url(https://wallpaperscraft.com/image/vancouver_night_panorama_87255_2560x1080.jpg)">&lt;/div>
	&lt;div class="valign">
		&lt;h1 class="white-text">test Image Banner&lt;/h1>
	&lt;/div>
&lt;/div>
		</code></pre>

	<br>
	<h5>Shitty Banner</h5>
	<p>It's shit but its good in some places.</p>
	<p>youll know when to use it</p>

	<pre><code class="language-markup">
	&lt;div class="shittyBanner valign">
		&lt;div class="row valign" style="width:100%;">
			&lt;div class="col s8">
				&lt;h4 class="white-text">Hire Us&lt;br>&lt;span class="secondary">We Are Poor&lt;/span>&lt;/h4>
			&lt;/div>
			&lt;div class="button raised">&lt;a style="color:white;" href="https://www.linkedin.com/in/michael-brooks-26799693/">Please&lt;/a>&lt;/div>
		&lt;/div>
	&lt;/div>
		</code></pre>
</div>
<?php include("./php/template/botNav.php"); ?>
