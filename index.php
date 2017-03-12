<!DOCTYPE html>
<html>
	<head>
		<title>Web4Dev</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
		<link href="./css/poverty.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<link href="./css/font-awesome.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
		<script src="./js/poverty.js" async></script>
		<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="crossorigin="anonymous"></script>
		<link href="css/prism.css" rel="stylesheet" />

		<!--Google SHit-->
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<meta name="google-signin-client_id" content="413698421344-c39mjtvkgs6svj4nipudj61uflfsjr31.apps.googleusercontent.com">
		<!--end google shit-->
	</head>
	<body>
		<div class="sidebar fixed" id="side">
			<div class="sideHeader" style="text-align:center;">
				<div class="sideHeader" style="text-align:center;">
					<h3 class="white-text">web4Dev</h3>
				</div>
			</div>
			<div class="sideBody">
				<ul >
					<li>
						Search:
						<div>
							<input autocomplete="off" type="text" name="search" id="searchBar">
							<!--<div class="sideBody" id="results">
</div>-->
						</div>
					</li>
					<li>
						<a href="#welcome">About Us</a>
					</li>
					<li><a href="#setup">Getting Started</a></li>
					<li><a href="#banner">Banner</a></li>
					<li>
						<a href="#button">Button</a>
					</li>
					<li><a href="#card">Card</a></li>
					<li><a href="#chip">Chip</a></li>
					<li><a href="#color">Color</a></li>
					<li><a href="#navbar">Navbar</a></li>
					<li><a href="#table">Table</a></li>
					<li><a href="#template">Template</a></li>
					<li><a href="#utility">Utility</a></li>
					<?php
					include("./php/isLogged.php");
					if (isLogged()){
						echo '<li><a href="#" onclick="signOut();">Sign out</a></li>';
					}else{
						echo '<li><a href="http://web4devs.com/php/login.php">Login</a></li>';
					}

					?>
					<script>
						function signOut() {
							var auth2 = gapi.auth2.getAuthInstance();
							auth2.signOut().then(function () {
								console.log('User signed out.');
								window.location = "./php/logout.php";
							});
						}


						gapi.load('auth2', function() {
							gapi.auth2.init();
						});

					</script>
				</ul>
			</div>
		</div>
		<div class="site-content fixed" style="" id="replace">
		</div>
	</body>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="crossorigin="anonymous"></script>
	<script src="./js/prism.js"></script>
	<script>
		function updatePage(data)
		{
			var $target = $('html,body');
			$target.animate({scrollTop: 0}, 0);
			$("#replace").html(data);
			$("#replace").fadeIn(401);
			Prism.highlightAll();
			var editables = $("ul.editable,ol.editable,h1.editable,h2.editable,h3.editable,h4.editable,h5.editable,h6.editable,p.editable,div.editable");
			editables.each(function(){
				getContent($(this));
			});
		}
		function updateContent(bttnClick)
		{
			console.log("updating with: "+window.location.hash);
			var hash = window.location.hash;
			if(bttnClick){
				if(hash =='#'||hash=="#!")
				{
					return 0;
				}
			}else
			{
				if(hash == "#!")
				{
					history.go(-1);
					updateContent(true);
				}
			}
			if(hash =='')
			{
				hash = 'welcome';
			}else{
				hash = hash.substr(1);
			}
			$.ajax(
				{url:'./pages/'+hash+'.html',
				 success:function(data){

					 $("#replace").fadeOut(401);
					 setTimeout(function(){updatePage(data);},400);
				 },
				 error:function(){
					 $.ajax(
						 {url:'./pages/error.html',
						  success:function(data){
							  $("#replace").fadeOut(401);
							  setTimeout(function(){updatePage(data);},400);
						  }
						 })}
				});
		}

		window.onhashchange = function(){
			updateContent(true);
		};
		window.onload = function() {
			console.log("loaded");

			$(".sideToggle").click(function(){
				$(".sidebar").toggleClass("active");
			});

		};
		updateContent(false);
	</script>
	<script>

		$( "#searchBar" ).parent().focusin(function() {
			$( this ).parent().append("<div class=\"card\"style=\"margin:0px;width:100%;overflow-y:scroll;position:absolute;max-height:200px;z-index:10000;\" class=\"sideBody\" id=\"results\"></div>");
			updateSearch()
		});
		$("#searchBar").parent().focusout(function(){
			setTimeout(function(){$("#results").remove();},250)

		});
		$( "#searchBar" ).keyup(function() {
			updateSearch()
		});

		function updateSearch(){
			var url = window.location.pathname;
			url = url.substring(url.lastIndexOf('/')+1);
			console.log(document.getElementById('searchBar').value );
			$.ajax({
				url: './php/search.php',
				type: 'POST',
				data: {
					"search": ''+document.getElementById('searchBar').value,
					"page": '"'+ url+window.location.hash+ '"'
				},
				success: function(data) {
					console.log($("#results"));
					$("#results").html(data);
					console.log(data);

				},
				error: function(e) {
					console.log("oops");
				}
			});}
	</script>
	<script src="./js/loadContent.js" async></script>
</html>
