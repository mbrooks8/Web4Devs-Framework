<?php
function isLogged(){
    session_start();
    if(isset($_SESSION['username'])||isset($_SESSION['email']))
    {
        return 1;
    }
    return 0;
}
?>

