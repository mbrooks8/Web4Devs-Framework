<?php
function convertFromHtml(&$html)
{

/*	$html = str_replace("<a href='#' contenteditable='false' class='submitButton'><div><i class='fa fa-check' aria-hidden='true'></i></div></a>", "", $html);
	$html = preg_replace('/(\s\s)/', '',(strip_tags($html,"<b><ul><li><br><ol>")));*/
	echo "<script>console.log(".$html.")</script>";
	/*$html = preg_replace('/(?!<[a-zA-Z=\"\':; ]*[^ ]>|<\\/[a-zA-Z="\':; ]*>)(<)/', "&lt;", $html);*/
}
function convertToHtml(&$html)
{
	$html = preg_replace('/(\s\s)/', '',(strip_tags($html,"<b><ul><li><br><ol>")));
	/*$tags = array("</li><li>","<li>",'</li>');
	$tagreplace = array("\n-","-","\n");
	$html = str_replace($tagreplace, $tags, $html);*/
}




















$id = $_GET["id"];
$content = $_GET["content"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "druplicate";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}



$sql = "SELECT * FROM content where id =". $id;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		/*convertToHtml($row["content"]);*/
		echo $row["content"];
	}
} else {
	convertFromHtml($content);

	if(strpos($content,"<script") > -1 || strpos($content,"<div") > -1 || strpos($content,"<?php") > -1)
	{
		$sql = "INSERT INTO content(id, content) VALUES (".$id.",You are trying to use unsupported tags within an editable. Consider using a Template, or applying an editable class to one of the child nodes)";
	}else{
		$sql = "INSERT INTO content(id, content) VALUES (".$id.",".$content.")";
	}
	$conn->query($sql);

	$sql = "SELECT * FROM content where id =". $id;
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			convertToHtml($row["content"]);
			echo $row["content"];
		}
	}
}
$conn->close();
?>
