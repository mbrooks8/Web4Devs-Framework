<?php
$id = $_GET["id"];
$content = $_GET["content"];
$url = $_GET["url"];
include("./connect.php");

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}







$sql = "SELECT * FROM content where id =". $id;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	//echo "<script>console.log('".$content."');</script>";
	while($row = $result->fetch_assoc()) {
		echo $row["content"];
	}
} else {
	$re = '/=((.*?)")((.*?)")/';


	preg_match_all($re, $content, $matches);
	$count = 0;
	foreach( $matches as $match)
	{
		if($count%5 == 0){
			$content = str_replace($match, preg_replace('/"/', '\\"',$match), $content);
		}
		$count++;
	}
	$content = preg_replace('/(\s\s+)/', '',$content);
	if($content == '""')
	{
		$content='"empty submission"';
	}
	$stripped = strip_tags($content);


	$sql = 'INSERT INTO content(id, content,strippedContent,page) VALUES ('.$id.','.$content.','.$stripped.','.$url.')';
	$rez = $conn->query($sql);
	if($rez){
		//echo "worked";
	}else
	{
		echo"Couldnt save this element, consider reducing the number of nested tags.";
	}

	$sql = "SELECT * FROM content where id =". $id;
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo $row["content"];
		}
	}
}
$conn->close();
?>
