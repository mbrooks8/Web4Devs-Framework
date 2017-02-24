<?php
session_start();
?>
<?php
/*echo "Favorite color is " . $_SESSION["username"] . ".<br>";*/
$users = array("eperez58","mbrooks8","areyes43","nvaishampayan","dhalili");
if(in_array($_POST["username"],$users)){
    $_SESSION["username"] = $_POST["username"];
    echo "<script>alert('hello')</script>";
    echo "<script>alert('".$_SESSION["username"]."')</script>";
    echo $_SESSION["username"];
    header('Location: ../index.php');
}else
{
     header('Location: ./login.php');
}
?>
