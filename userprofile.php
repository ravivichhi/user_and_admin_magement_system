<?php


if(isset($_SESSION["mvc_uname"]))
{
    
}
else
{
    header("location:userhome.php");
}



if(isset($_REQUEST["cancle"]))
{
    header("location:userhome.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #uploading
        {
            background-color:rgb(167, 69, 69);
        }
        #uploading1
        {
            background-color: rgb(95, 155, 155);
        }
        #filesubmit
        {
            background-color: blue;
            color:white;
            border-radius:10px;
        }
        #special
        {
            margin-top:10px;
            width:300px;
            height:100px;
        }
    </style>
</head>
<body>
    <form action="#" method="post" enctype="multipart/form-data">
        <table border="1" cellspacing="0" align="center" id="special">
            <tr>
                <th id="uploading">Profile Uploading......</th>
            </tr>
            <tr>
                <td id="uploading1"> <input type="file" name="file"></td>
            </tr>
            <tr>
                <td colspan="2" align="center" id="uploading1"><input type="submit" name="profile_submit" value="submit" id="filesubmit">
                <input type="submit" name="cancle" value="Cancle" id="filesubmit">
            </td>
            </tr>
       
        
        </table>
    </form>
</body>
</html>