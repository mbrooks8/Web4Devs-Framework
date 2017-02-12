
</div><!-- END CONTENT-->

<footer class="page-footer">
	<div class="container">
		<div class="row">
			<div class="col l8 s12">
				<h5 class="white-text">4Dev</h5>
				<p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
			</div>
			<div class="col l4 s12">
				<h5 class="white-text">Links</h5>
				<ul>
					<li><div class="chip" "cursor:none;"> <img src = "img/Michael.jpg" alt="Contact Person"><a style="color:black;" href="https://www.linkedin.com/in/michael-brooks-26799693/">Michael Brooks</a></div></li>

					<li><div class="chip" "cursor:none;"> <img src = "img/Deo.jpg" alt="Contact Person"><a style="color:black;" href="https://www.linkedin.com/in/deohalili/">Deo Halili</a></div></li>

					<li><div class="chip" "cursor:none;"> <img src = "img/Esteban.jpg" alt="Contact Person"><a style="color:black;" href="https://www.linkedin.com/in/estebanmagallonperez/">Esteban Perez</a></div></li>

					<li><div class="chip" "cursor:none;"> <img src = "img/Andres.jpg" alt="Contact Person"><a style="color:black;" href="http://r.ddmcdn.com/s_f/o_1/cx_633/cy_0/cw_1725/ch_1725/w_720/APL/uploads/2014/11/too-cute-doggone-it-video-playlist.jpg">Andres Reyes</a></div></li>

					<li><div class="chip" "cursor:none;"> <img src = "img/sloth.jpg" alt="Contact Person"><a style="color:black;" href="https://www.linkedin.com/in/nicholas-vaishampayan-bb8ba2a5/">Nick Vaishampayan</a></div></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			© 2014 Copyright 4Dev All Rights Reserved
			<a class="grey-text text-lighten-4 right" href="https://www.linkedin.com/in/estebanmagallonperez/">Please Hire Us</a>
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
