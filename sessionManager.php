<?php
session_start();
?>
<?php
/*echo "Favorite color is " . $_SESSION["username"] . ".<br>";*/
$_SESSION["username"] = $_POST["username"];
echo "<script>alert('hello')</script>";
echo "<script>alert('".$_SESSION["username"]."')</script>";
echo $_SESSION["username"];
header('Location: ./drone.php');
?>
