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
						<a href="#welcome">About Us</a>
					</li>
					<li><a href="#setup">Getting Started</a></li>
					<li><a href="#banner">Banner</a></li>
					<li>
						<a href="#button">Button</a>
					</li>
					<li><a href="#card">card</a></li>
					<li><a href="#chip">chip</a></li>
					<li><a href="#color">color</a></li>
					<li><a href="#navbar">navbar</a></li>
					<li><a href="table">table</a></li>
					<li><a href="#template">template</a></li>
					<li><a href="#utility">utility</a></li>
				</ul>
			</div>
		</div>
		<div class="site-content fixed" style="" id="replace">
		</div>
	</body>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="crossorigin="anonymous"></script>
	<script src="./js/prism.js"></script>
	<script>
		var overlay = "<div style='height:100vh;'>Loading</div>";
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
			var hash = window.location.hash;
			if(bttnClick){
				if(hash =='#'||hash=="#!")
				{
					return 0;
				}
			}else
			{
				console.log(history);
				if(hash == "#!")
				{
					history.go(-1);
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
							  $("#replace").html(overlay);
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

			$(".sideToggle").click(function(){
				$(".sidebar").toggleClass("active");
			});
			updateContent(false);
		};
	</script>
	<script src="./js/loadContent.js" async></script>
</html>
