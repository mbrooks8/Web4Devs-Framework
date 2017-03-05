<?php
$searched = $_POST["search"];
$page = $_POST["page"];
include("./connect.php");

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}


$searched;
$length = strlen($searched);
$pattern = '';
$length = 50 - $length;
$length = ($length/2)+1;
$regexpression = '';
for ($i=1;$i<=$length;$i++)
{
	$regexpression = $regexpression.".?";
}
$regex = '/([A-Za-z0-9.,-]+\s*){0,5}\\'.$searched.'(\s|[,.!?])(\s*[A-Za-z0-9.,-]+){0,5}/';

/*

$pattern = '/'.$regexpression.$searched.$regexpression.'/';*/
$words = explode(" ", $searched);
$where = "WHERE";

for ($i = 0; $i < sizeof($words); $i++) {
	if($words[$i] == "")
	{
		if($i==0)
		{
			$where = $where." 0";
		}
	}else
	{
		if($i == 0)
		{
			$where = $where." strippedContent like '%".$words[$i]."%'";
		}else
		{
			$where = $where." or strippedContent like '%".$words[$i]."%'";
		}
	}


}

$sql = 'SELECT page, strippedContent FROM `content` '.$where.' and `page` != '.$page;
$result = $conn->query($sql);
echo "<ul>";
if ($result->num_rows > 0) {
	//echo "<script>console.log('".$content."');</script>";
	while($row = $result->fetch_assoc()) {
		if(strlen($row["strippedContent"]) > 70 ){
			$start = 0;
			$pos = strpos($row["strippedContent"], $searched);
			$end = $pos+strlen($searched)+35;

			if($pos > 35 && $pos !=false)
			{
				$start = $pos-35;
			}
			if($pos+strlen($searched)+35  >strlen($row["strippedContent"]))
			{
				$end = strlen($row["strippedContent"]);
			}
			$dispString = '';
			if($start != 0)
			{
				$dispString = $dispString."...";
			}
			$dispString = $dispString.substr($row["strippedContent"],$start,$end);
			if($end < strlen($row["strippedContent"]))
			{
				$dispString = $dispString."...";
			}
			echo "<li><a href='./".$row["page"]."'>".$dispString."</a></li>";
		}else{
			echo "<li><a href='./".$row["page"]."'>".$row["strippedContent"]."</a></li>";
		}
	}
} else {
	echo "<li><a>no results found</a></li>";
}
echo "</ul>";
$conn->close();
?>
