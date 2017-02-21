<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <body>

        <?php
        // remove all session variables
        session_unset();

        // destroy the session
        session_destroy();
        header('Location: ../drone.php');
        ?>
    </body>
</html>
