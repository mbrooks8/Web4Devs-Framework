
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
					<li><a style="color:black;" href="https://www.linkedin.com/in/michael-brooks-26799693/"><div class="chip" "cursor:none;"> <img src = "img/Michael.jpg" alt="Contact Person">Michael Brooks</div></a></li>

					<li><a style="color:black;" href="https://www.linkedin.com/in/deohalili/"><div class="chip" "cursor:none;"> <img src = "img/Deo.jpg" alt="Contact Person">Deo Halili</div></a></li>

					<li><a style="color:black;" href="https://www.linkedin.com/in/estebanmagallonperez/"><div class="chip" "cursor:none;"> <img src = "img/Esteban.jpg" alt="Contact Person">Esteban Perez</div></a></li>

					<li><a style="color:black;" href="https://www.linkedin.com/in/andres-reyes-182465133/"><div class="chip" "cursor:none;"> <img src = "img/Andres.jpg" alt="Contact Person">Andres Reyes</div></a></li>

					<li><a style="color:black;" href="https://www.linkedin.com/in/nicholas-vaishampayan-bb8ba2a5/"><div class="chip" "cursor:none;"> <img src = "img/sloth.jpg" alt="Contact Person">Nick Vaishampayan</div></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			© 2017 Copyright 4Dev All Rights Reserved
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
<script>
		/*Select all editable elements, and refresh the content from the database*/
	//console.log("making edits");
		var editables = $("ul.editable,ol.editable,h1.editable,h2.editable,h3.editable,h4.editable,h5.editable,h6.editable,p.editable,div.editable");
		editables.each(function(){
			//console.log("test");
			getContent($(this));
		});
		function getContent(elem)
		{
			//console.log("getContent: "+elem[0].innerHTML);
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
					elem.find('.submitButton').remove();
					<?php
					if(isset($_SESSION["username"])){
						echo "addEditButton(elem);";
					}
					?>
				},
				error: function(e) {
					alert("oops");
				}
			});
		}



	</script>


</html>
