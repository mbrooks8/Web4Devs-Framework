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
				<p>There are three standard types of banners:</p>
				<ul class="editable" id="bannerList1">
					<li>Default Banners : </li>
					<li>Small Banners</li>
				</ul>
			</div>
	<p>A jumbotron indicates a big box for calling extra attention to some special content or information.</p>
	<p>A jumbotron is displayed as a grey box with rounded corners. It also enlarges the font sizes of the text inside it.</p>

	<p>Here is an example of a banner</p>

	<div class="banner">
		<div style="position:absolute; background:linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.5),rgba(0,0,0,0)); height:100%; width:100%;"></div>
		<div class="valign content">
			<div class="container">
				<h1>Example Banner</h1>
				<p>Here is some more text</p>
			</div>
		</div>
		<div class="imgDiv"style="background-color:#EEEEEE"></div>

		<a class="button floating"><i class="fa fa-download fa-2x" aria-hidden="true"></i></a>
	</div>

	<pre><code class="language-markup">
&lt;div class="banner">
	&lt;div style="position:absolute; background:linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.5),rgba(0,0,0,0)); height:100%; width:100%;">&lt;/div>
	&lt;div class="valign content">
		&lt;div class="container">
			&lt;p>A &lt;span class="secondary">Front and Backend&lt;/span> Framework&lt;/p>
			&lt;h1>4Dev&lt;span style="color:white; word-spacing:0;"> • &lt;/span>Welcome&lt;/h1>
			&lt;p>Made &lt;span class="secondary">By developers&lt;/span> for&lt;span class="secondary"> developers&lt;/span>&lt;/p>
		&lt;/div>
	&lt;/div>
	&lt;div class="imgDiv"style="background: url(https://wallpaperscraft.com/image/vancouver_night_panorama_87255_2560x1080.jpg)">&lt;/div>
&lt;/div>
		</code></pre>

	<p> here is a half sized banner</p>
	<p> to make a smaller banner just add the small class</p>

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

	<pre><code class="language-markup">
&ls;div class="banner small">
	&ls;div style="position:absolute; background:linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.5),rgba(0,0,0,0)); height:100%; width:100%;">&ls;/div>
	&ls;div class="valign content">
		&ls;div class="container">
			&ls;h1 class="white-text">Banners&ls;/h1>
			&ls;p>Made &ls;span class="secondary">By developers&ls;/span> for&ls;span class="secondary"> developers&ls;/span>&ls;/p>
		&ls;/div>
	&ls;/div>
	&ls;div class="imgDiv"style="background: url(https://wallpaperscraft.com/image/vancouver_night_panorama_87255_2560x1080.jpg)">&ls;/div>

	&ls;a class="button floating">&ls;i class="fa fa-download fa-2x" aria-hidden="true">&ls;/i>&ls;/a>
&ls;/div>
		</code></pre>

</div>
<?php include("./php/template/botNav.php"); ?>
