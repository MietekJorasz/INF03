<?php
    session_start();

    if(isset($_SESSION['loggedIn'])){
        unset($_SESSION['loggedIn']);
    }

    header("Location: ../index.php");
    session_destroy();
?>