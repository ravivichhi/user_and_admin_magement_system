<?php
    session_start();
    
    unset($_SESSION["mvc_uname"]);
    header("location:login_view.php");

?>