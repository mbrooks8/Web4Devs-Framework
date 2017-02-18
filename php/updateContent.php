<?php
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

//echo $id;
//$content = preg_replace('/(\s\s)/', '',$content));
$sql = 'UPDATE content SET content = "'.$content.'" WHERE content.id = "'.$id.'"';
if($result = $conn->query($sql))
{
    echo "<scirpt>alert('we did it');</script>";
}else
{
    echo "<scirpt>alert('we didnt do it');</script>";
}
$conn->close();
?>
