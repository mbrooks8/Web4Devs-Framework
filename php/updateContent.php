<?php include('./isLogged.php');?>
<?php
if(isLogged == 0)
{
    header( 'Location: ./login.php' );
}
$id = $_GET["id"];
$content = $_GET["content"];
include('./connect.php');

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//echo $id;
//$content = preg_replace('/(\s\s)/', '',$content));
if($content == '""')
{
    $content='"empty submission"';
}
$stripped = strip_tags($content);
$sql = 'UPDATE content SET content = "'.$content.'",strippedContent = "'.$stripped.'",time=NOW() WHERE content.id = "'.$id.'"';

if($result = $conn->query($sql))
{
    echo "<scirpt>alert('we did it');</script>";
}else
{
    echo "<scirpt>alert('we didnt do it');</script>";
}
$conn->close();
?>
