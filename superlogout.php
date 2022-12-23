<?php
    session_start();
     unset($_SESSION["superuname"]);
    // unset($_SESSION["id1"]);
   
    header("location:superlogin.php");
?>