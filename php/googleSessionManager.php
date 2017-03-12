<?php
session_start();
?>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "druplicate";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * from users WHERE email =" .$_POST['email'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION["email"] = $_POST["email"];
    echo $_SESSION["email"];
    header('Location: ../index.php');
}else
{
     header('Location: ./login.php');
}
?>
