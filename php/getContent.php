<?php

function convertFromHtml(&$html) {
	//First remove tabs, and remove tags that arent allowed
	$html = preg_replace('/(\s\s)/', '',(strip_tags($html,"<b><ul><li><br><ol>")));
	//now format into more legible form

	$html = preg_replace('/(<ol>)/',    '-numberedStart\n',	$html);
	$html = preg_replace('/(<ul>)/',    '-bulletStart\n',	$html);
	$html = preg_replace('/(<li>)/',    '  --',				$html);
	$html = preg_replace('/(<\/li>)/',  '-end\n',			$html);
	$html = preg_replace('/(<\/ul>)/',  '---bulletEnd\n',	$html);
	$html = preg_replace('/(<\/ol>)/',  '-numberedEnd\n',	$html);
}
function convertToHtml(&$html)
{
	$html = preg_replace( '(-numberedStart\n)',   '<ol>',	$html);
	$html = preg_replace( '(-bulletStart\n)',   '<ul>',		$html);
	$html = preg_replace( '(  --)',             '<li>',		$html);
	$html = preg_replace( '(-end\n)',          '</li>',		$html);
	$html = preg_replace( '(-bulletEnd\n)',     '</ul>',	$html);
	$html = preg_replace( '(-numberedEnd\n?)',   '<ol>',	$html);
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
		convertToHtml($row["content"]);
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
