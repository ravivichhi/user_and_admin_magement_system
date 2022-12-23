<?php
include("admin_controller.php");
session_start();
if(isset($_SESSION["superuname"]))
{
    
}
else
{
    header("location:home.php");
}

    
    
    


?>