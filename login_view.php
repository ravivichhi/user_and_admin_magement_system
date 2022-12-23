
<?php
include("reg_controller.php");

if(isset($_SESSION["mvc_uname"]))
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
        body
        {
            margin: 0;
            padding: 0;
            /* background-color: rgb(65, 70, 70); */
            background-image:url(background.jpg);
            
        }
        table
        {
           margin-top: 60px;
           width: 400px;
           
        }
        #submit
        {
            background-color: brown;
            color: white;
            width: 300px;
            height: 40px;
            margin-top: 10px;
            border-radius: 10px;
            border: none;
        }
        #submit:hover
        {
            background-color: darkorange;
        }
        .main
        {
            background-color: rgb(76, 76, 145);
            width: 500px;
            height: 280px;
            margin-left: 450px;
            margin-top: 200px;
            border-radius: 15px;
            box-shadow: 10px 10px 40px black;
            
        }
    
        #reg
        {
            font-weight: bold;
            font-size: 20px;
           
            color: white;
        }
        th
        {
            color: white;
            font-size: 15px;
        }
        input
        {
            border-radius: 5px;
            margin-left:10px;
        }
        #menu
        {
            margin-left:45px;
            width:300px;
            height:30px;
            border-radius: 10px;
        }
        #msg
        {
            width:100%;
            color:white;
            margin-left:-150px;
            font-size:25px;
        }
        img
        {
            position: absolute;
            left: 950px;
            bottom: 250px;
            width:550px;
            animation:ravi 2s;
        }
        @keyframes ravi
        {
            0%
            {
                transform:translateY(430px);
            }
            100%
            {
                transform:translateY(calc(0px*1));
            }
        }
       
    </style>
</head>
<body>

<form method="post">
    <div class="main">
        <form method="post" action="#">
            <table align="center" cellpadding="10" cellspacing="0">
                <tr>
                    <th colspan="2" id="reg">USER LOGIN HERE</th>
                </tr>
                <tr>
                    
                    <td><input type="text" name="uname" placeholder="Enter Username" id="menu"></td>
                </tr>
                <tr>
                    
                    <td><input type="password" name="pass" placeholder="Enter Password" id="menu"></td>
                </tr>
                <tr>
                <td colspan="2" align="center"><input type="submit" name="login_submit" value="Submit" id="submit">
                
                <input type="submit" name="signup" value="Sign up" id="submit">
                </td>
                </tr>
    </table>
    </form>
    </div>
    <img src="download.png">
    <h3 style="color:red;" align="center" id="msg">
    <?php
        if(isset($_REQUEST["msg"]))    
        {
            echo "Username or Password Invalid";
            header("refresh:2; url=login_view.php");
        }
        if(isset($_REQUEST["msg1"]))    
        {
            echo "Your ID is BLOCKED";
            header("refresh:2; url=login_view.php");
        }
    ?>
    </h3>
</body>
</html>