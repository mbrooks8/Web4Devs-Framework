<?php
include('./isLogged.php');
if(isLogged())
{
    echo 1;
}else{
    echo 0;
}
?>
