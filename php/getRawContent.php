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



$sql = "SELECT * FROM content where id =". $id;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["content"];
    }
}
$conn->close();
?>
