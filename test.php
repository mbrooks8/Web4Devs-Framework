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
			body
			{
				padding: 5% 10%;
			}
		</style>
		<?php
		$user = true;
		?>
		<?php
		if($user)
		{
			echo '<link href="./css/editable.css" type="text/css" rel="stylesheet" media="screen,projection"/>';
			echo '<script src="./js/editContent.js"></script>';
		}
		?>
	</head>


	<body>
		<div class="row">
		<div class="col m2 editable" id="column">hi</div>
		<div class="col m2">hello</div>
		<div class="col m2">test</div>
		<div class="col m2">boop</div>
		</div>

		<div class="card editable" spellcheck="true" id="adsfasdf">
		</div>
		<ul class="editable" id="asd">
		</ul>
		<ol class="editable" id="asd">
		</ol>
		<div class="chip editable" id="chip"></div>
		<div class="chip editable" id="helpMe">
			<img src = "img/sloth.jpg" alt="Contact Person" width="96" height="96">
			<span>Slothy McSlothface </span>
			<span class="closebtn" onclick="this.parentElement.style.display='none'"><i class="fa fa-times" aria-hidden="true"></i></span>
		</div>


	</body>
	<script>
		$(".sideToggle").click(function(){
			$(".sidebar").toggleClass("active");
		})
	</script>
	<script>
		/*Select all editable elements, and refresh the content from the database*/

		var editableLists = $("ul.editable,ol.editable");
		editableLists.each(function(){
			console.log("test");
			getListContent($(this));
		});
		function getListContent(elem)
		{
			console.log("getListContent: "+elem[0].innerHTML);
			$.ajax({
				url: './php/getListContent.php',
				type: 'GET',
				data: {
					"id": '"'+elem[0].id+'"',
					"content": '"'+elem[0].innerHTML+'"'
				},
				success: function(data) {
					console.log(data);
					var out = data;
					elem[0].innerHTML = out;
					addEditButton(elem);
				},
				error: function(e) {
					alert("oops");
				}
			});
		}
		var editables = $("h1.editable,div.editable");
		editables.each(function(){
			console.log("test");
			getContent($(this));
		});
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
					addEditButton(elem);
				},
				error: function(e) {
					alert("oops");
				}
			});
		}



	</script>


</html>
