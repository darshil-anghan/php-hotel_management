<?php
    unset($_SESSION['Uname']);

    session_destroy();

    header("location:./Loginn.php");
    exit();
?>