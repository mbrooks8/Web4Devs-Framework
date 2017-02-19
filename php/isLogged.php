<?php
function isLogged(){
    session_start();
    if(isset($_SESSION['username']))
    {
        return 1;
    }
    return 0;
}
?>
