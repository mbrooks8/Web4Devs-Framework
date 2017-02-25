<?php
include("./php/template/topNav.php");
?>
<link href="./css/prism.css" rel="stylesheet" />
<script src="./js/prism.js"></script>
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
				<p class="editable" id="buttonGroup5">Choosing button style</p>
				<br>
				<p class="editable" id="buttonGroup4">Choosing a button style depends on the primacy of the button, the number of containers on screen, and the screen layout.</p>
				<br>
				<p class="editable" id="buttonGroup3"><b>Function:</b> Is it important and ubiquitous enough to be a floating action button?</p>
				<br>
				<p class="editable" id="buttonGroup2"><b>Dimension:</b> Choose raised or flat depending on the container it will be in and how many z-space layers you have on screen. There should not be many layers of objects on the screen.</p>
				<br>
				<p class="editable" id="buttonGroup1"><b>Layout:</b> Use primarily one type of button per container. Only mix button types when you have a good reason to, such as emphasizing an important function.</p>

			</div>
			<div class="col s12 m8">
				<div class="card flat">
					<img class="responsive-img" src="https://storage.googleapis.com/material-design/publish/material_v_10/assets/0Bx4BSt6jniD7RHFUU2dFdmMtcm8/components_buttons_usage_main.png">
				</div>
			</div>
		</div>
<br>
		<div class="divider"></div>
<br>
		<div class="row">
			<div class="col s12 m4">
				<h5 class="primary center editable" id="buttonUsage">Usage</h5>
				<br>
				<p><b>button types</b></p>
				<br>
				<p>The type of button used should be suited to the context in which it appears.</p>
			</div>
			<div class="col s12 m8">
				<table class="striped highlight">
					<thead>
						<tr>
							<th>Context</th>
							<th>Button type</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Dialogs</td>
							<td>Use flat buttons in dialogs.</td>
						</tr>
						<tr>
							<td>Inline</td>
							<td>Depending on your layout, use raised buttons or flat buttons for inline buttons.</td>
						</tr>
						<tr>
							<td>Persistent availability</td>
							<td>If your app requires actions to be persistent and readily available to the user, consider using the floating action button or persistent footer buttons.</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div><!--end row-->

		<p>How to use</p>
		<p>Flat</p>
		<pre><code class="language-markup">
		&lt;div class="button">Button&lt;/div>
		</code></pre>
		<p>Raised</p>
		<pre><code class="language-markup">
		&lt;div class="button raised">Button&lt;/div>
		</code></pre>
		<p>Floating</p>
		<pre><code class="language-markup">
		&lt;div class="button floatingg">Button&lt;/div>
		</code></pre>

	</div> <!--End section-->
</div>
<?php include("./php/template/botNav.php"); ?>
