<?php
include("admin_controller.php");
ob_start();


?>
<script>
    function fun()
    {
        return con=confirm("ARE YOU SURE!! DELETE THIS DATA");
        if(con==true)
        {
          
        }
        else
        {
            header("location:home.php");
        }
    }
</script>
<?php




if(isset($_REQUEST["submit"]))
{
     header("refresh:0.2; url=home.php");
}
if(isset($_REQUEST["update"]))
{
     header("refresh:0.2; url=home.php");
}
if(isset($_REQUEST["cancle"]))
 {
     header("location:home.php"); 
}
if(isset($_REQUEST["back"]))
 {
     header("location:home.php"); 
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
            background-color:rgb(134, 134, 166);
        }
        #super
        {
            width: 100%;
           
        }
        #user
        {
            margin-top:50px;
            width: 100%;
        
        }
        
        a
        {
            width:100%;
            height:100%;
            background-color:blue;
            color:white;
            border:none;
            text-decoration:none;
        }
        button 
        {
            
            width:50px;
            height:30px;
            background-color:blue;
            color:white;
            border:none;
            border-radius:5px;
        }
        #button:hover
        {
            
            opacity: 0.8;
            
        }
        #delete 
        {
            width:70px;
            height:30px;
            background-color:red;
        }
        #delete:hover
        {
            
            opacity: 0.8;
            
        }
        #header1
        {
            background-color:rgb(84, 84, 140);
        }
        #header
        {
            background-color:rgb(167, 69, 69);
            height:150px;
        }
       
        #navbar
        {
          
            background-color: rgb(95, 155, 155);
            font-size:16px;
        }
        #detail
        {
            background-color:rgb(134, 134, 166);
            
        }
        #detail1
        {
            /* width:100%; */
            background-color: rgb(95, 155, 155);
        }
        #log
        {
            background-color:blue;
            width:75px;
        }
        #log:hover
        {
            
            opacity: 0.8;
            
        }
        #font span
        {
            margin-left:-1400px;
            font-size:25px;
        }
        #add
        {
            background-color:rgb(45, 131, 45);
            width:150px;
            margin-left:30px;
            padding-right:20px;
        }
        #add:hover
        {
            
            opacity: 0.8;
            
        }
        #add1
        {
            background-color:rgb(45, 131, 45);
            width:100px;
            margin-left:18px;
           padding-right:30px;
        }
        #add1:hover
        {
            
            opacity: 0.8;
            
        }
        #fun
        {
            width:100%;
            margin-top:20px;
        }
        #detail2
        {
            background-color:rgb(45, 131, 45);
        }
        #det
        {
            background-color: blue;
            width:80px;
        }
        #det:hover 
        {
            
            opacity: 0.8;
                       
        }
        #submitadd
        {
            background-color: blue;
            color:white;
            width:100px;
            height:30px;
            margin-left:10px;
            border-radius:10px;
        }
        #ed:hover
        {
            
            opacity: 0.8;
            
        }
        #all
        {
            border-radius:10px;
            color:white;
            width:100px;
            height:30px;
            margin-top:5px;
            background-color:red;
            float:left;
            margin-right:900px;
        }
        #all a
        {
            background-color:red;
        }
        #all:hover
        {
            opacity: 0.8;
        }
        #asc
        {
            width:100px;
        }
       .layout
       {
        word-break:break-all;
        width:70px;
       }
       .layoutemail
       {
        word-break:break-all;
        width:210px;
       }
       .layouthobby
       {
        word-break:break-all;
        width:115px;
        
       }
       .layouthobby0
       {
        word-break:break-all;
        width:70px;
       }
       .layouthobby0 img
       {
        width:70px;
        height:50px;
        border-radius:50%;

       }
       .layoutlname
       {
        word-break:break-all;
        width:70px;
       }
       .layoutmname
       {
        word-break:break-all;
        width:70px;
       }
       .layoutfname
       {
        word-break:break-all;
        width:70px;
       }
       .layoutpass
       {
        word-break:break-all;
        width:70px;
       }
       .layoutuname
       {
        word-break:break-all;
        width:70px;
       }
       .layoutid
       {
        word-break:break-all;
        width:30px;
       }
       .layoutphone
       {
        word-break:break-all;
        width:80px;
       }
       .layoutoption
       {
        
        width:70px;
      
        
       }
       .layoutaction
       {
        
        width:250px;
        
       }
       #avatar
       {
            
            margin-right:80px;
            width:210px;
            text-align:right;
       }
       #avatar #remove
       {
        
        /* color:blue; */
        font-size:15px;
        width:300px;
        height:0px;
        background-color:none;
        position:absolute;
        top:130px;
        left:860px;
       }
       #avatar span
       {
        position: absolute;
        width:50px;
        right:300px;
       }
       #avatar #change
       {
        text-decoration:underline;
        /* color:blue; */
        position: absolute;
        width:100px;
        font-size:15px;
        right:-340px;
        top:30px;
        
       }
       .img
       {
        width:100px;
        height:100px;
        float:left;
        overflow:hidden;
        border-radius:50%;
       }
       .img img
       {
        width:100%;
        height:100%;
       }
     
    </style>
</head>
<body>
    <form method="post">
    <table border="1" cellpadding="10" cellspacing="0" id="super">
        <tr id="header">
            <th colspan="10" style="color:white; font-size:35px;"><span>ADMIN ACCESS</span></th>
            <th style="color:white; font-size:20px;" id="avatar">
                <div class="img">
                <?php
                
                    if($photo["filename"]==true)
                    {
                    ?>
                        <img src="upload/<?php echo $photo["filename"]; ?>"/>
                    <?php
                    }
                    else
                    {
                    ?>
                        <img src="avatar.png"/>
                    <?php
                    }
                    ?>
                    </div>
                <a href="removeprofile.php?remove" id="remove">remove profile</a>
                
            <span>

                <?php
                   

                     if(isset($_SESSION["superuname"]))
                     {
                         echo "Welcome, ".$_SESSION["superuname"];
                    ?>
                         
                    <?php
                     }
                    else
                    {
                        header("location:superlogin.php");
                    }
                ?>
                <span>
               <a href="home.php?profile" id="change">Change Profile</a>
              
               </span>
                </span>
                
            </th>
            <td><button id="log"><a href="superlogout.php" id="log">LOGOUT</a></button>
            <button  id="add1"><a href="home.php?add1" id="add1">ADD</a></button>
        </td>
            
        </tr>
        <tr id="navbar">
            <th>Id</th>
            <th>Username</th>
            <th>Password</th>
            <th>First name</th>
            <th>Middle name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Phone No.</th>
            <th>Address</th>
            <th>Country</th>
            <th>Hobby</th>
            <th>Action</th>
        </tr>
        <?php

       
        while($fetch=mysqli_fetch_array($admin))
        {
            if($_SESSION["id1"]==$fetch["id"])
            {
        ?>
        <tr id="navbar">
            <td><?php echo $fetch["id"]; ?></td>
            <td><?php echo $fetch["uname"]; ?></td>
            <td class="layoutpass"><?php echo $fetch["password"]; ?></td>
            <td><?php echo $fetch["fname"]; ?></td>
            <td><?php echo $fetch["mname"]; ?></td>
            <td><?php echo $fetch["lname"]; ?></td>
            <td><?php echo $fetch["email"]; ?></td>
            <td><?php echo $fetch["phone"]; ?></td>
            <td><?php echo $fetch["address"]; ?></td>
            <td><?php echo $fetch["cu_name"]; ?></td>
            <td><?php echo $fetch["hobby"]; ?></td>
        <td align="center"><button id="ed"><a href="home.php?ed1=<?php echo $fetch["id"] ?>" id="ed">EDIT</a></button> | <button  id="delete"><a href="home.php?del=<?php echo $fetch["id"]; ?>" id="delete" onclick="return fun()">DELETE</a></button></td>
        </tr>
        <?php
        }
    }
        ?>
    </table>
</form>
<?php
        function profile()
        {
            include("superprofile.php");
        }
    
        if(isset($_REQUEST["profile"]))
        {
            profile();
        }
    ?>



    <?php
       
        if(isset($_REQUEST["ed1"]))
        {
            include("superadding.php");
        }
    ?>
      <?php
       
        if(isset($_REQUEST["add1"]))
        {
            include("superadding.php");
        }
    ?>
    <?php
      
        if(isset($_REQUEST["add"]))
        {
            include("adding.php");
        }
?>
<h2 align="center" style="color:blue;">
    <?php
    if(isset($_REQUEST["msg"]))
    {
        echo "Data Inserted Successfull";
        header("refresh:2; url=home.php");
    }
?>
</h2>
<h2 align="center" style="color:red;">
    <?php
    if(isset($_REQUEST["msg1"]))
    {
        echo "User Already Exucute Please Try Another Username";
        header("refresh:3; url=home.php");
    }
?>
</h2>
<h2 align="center" style="color:blue;">
    <?php
    if(isset($_REQUEST["msg2"]))
    {
        echo "Data Update Successfull";
        header("refresh:3; url=home.php");
    }
?>
</h2>
<h2 align="center" style="color:red;">
    <?php
    if(isset($_REQUEST["delmsg"]))
    {
        echo "Data Delete Successfull";
        header("refresh:2; url=home.php");
    }
?>
</h2>
<h2 align="center" style="color:red;">
    <?php
    if(isset($_REQUEST["delmsg1"]))
    {
        echo "Data Delete Successfull";
        header("refresh:2; url=home.php");
    }
?>
</h2>
<h2 align="center" style="color:red;">
    <?php
    if(isset($_REQUEST["delmsg2"]))
    {
        echo "Data Delete Successfull";
        header("refresh:2; url=home.php");
    }
?>
</h2>


<?php
        if(isset($_REQUEST["details"]))
        {
            include("checkdetails.php");
        }
?>
   <?php
        function ravi5()
        {
            include("checkedit.php");
        
        }
    
        if(isset($_REQUEST["checked"]))
        {
            ravi5();
        }
?>
<form method="post">
    <table border="1" cellpadding="2" cellspacing="0" id="user">
        <tr id="header1">
            <th colspan="15" style="color:white; font-size:30px;" id="font"><input type="submit" name="delall" value="DELETE ALL" id="all" onclick="return fun()"><span>User Register Details</span></th>
            <td><button  id="add"><a href="home.php?add" id="add">ADD</a></button></td>
        </tr>
        <tr id="navbar1">
        <th>Select</th>
            <th>Id</th>
            <th>Username</th>
            <th>Password</th>
            <th>First name</th>
            <th>Middle name</th>
            <th>Last name</th>
            <th>Email</th>
            <th>Phone No.</th>
            <th>Address</th>
            <th>Country</th>
            <th>Profile</th>
            <th>Hobby</th>
            <th>Status</th>
            <th>Option</th>
            <th>Action</th>
        </tr>
                
        <?php
        $n=1;
        while($n<=1)
        {
           while($fetch=mysqli_fetch_array($user))
            {   
        ?>
       
                <tr id="detail">
                <td align="center"><input type="checkbox" name="checkbox[]" value="<?php echo $fetch["id"]; ?>"></td>
                <td class="layoutid"><?php echo $n; ?></td>
                <td class="layoutuname"><?php echo $fetch["uname"]; ?></td>
                <td class="layoutpass"><?php echo $fetch["pass"]; ?></td>
                <td class="layoutfname"><?php echo $fetch["fname"]; ?></td>
                <td class="layoutmname"><?php echo $fetch["mname"]; ?></td>
                <td class="layoutlname"><?php echo $fetch["lname"]; ?></td>
                <td class="layoutemail"><?php echo $fetch["email"]; ?></td>
                <td class="layoutphone"><?php echo $fetch["phone"]; ?></td>
                <td class="layout"><?php echo $fetch["address"]; ?></td>
                <td><?php echo $fetch["cu_name"]; ?></td>
                <td class="layouthobby0">
                <?php
                if($fetch["filename"]==true)
                {
                ?>
                    <img src="upload/<?php echo $fetch["filename"]; ?>"/>
                <?php
                } 
                else
                {
                ?>
                    <img src="avatar.png"/>
                <?php
                }
                ?>
                </td>
                <td class="layouthobby"><?php echo $fetch["hobby"]; ?></td>
                <td><?php echo $fetch["status"]; ?></td>
                <td class="layoutoption">
                <?php
                    if($fetch["status"]=="Enable")
                    {
                ?>
                        <button  id="delete"><a href="home.php?disable=<?php echo $fetch["id"]; ?>" id="delete">Disable</a></button>
                <?php
                    }
                    if($fetch["status"]=="Disable")
                    {
                ?>
                        &nbsp;&nbsp;<button id="ed"><a href="home.php?enable=<?php echo $fetch["id"] ?>" id="ed">Enable</a></button> 
                <?php
                    }
                ?>
                
            
                </td>
                <td align="center" class="layoutaction"><button id="ed"><a href="home.php?ed=<?php echo $fetch["id"] ?>" id="ed">EDIT</a></button> | <button  id="delete"><a href="home.php?del1=<?php echo $fetch["id"]; ?>" id="delete" onclick="return fun()">DELETE</a></button> | <button  id="det"><a href="home.php?details=<?php echo $fetch["uname"]; ?>" id="det">DETAILS</a></button></td>
                </tr>
            <?php
             $n++;
            
            }
            break;
           
        }
            ?>

<?php
        if(isset($_REQUEST["ed"]))
        {
            include("adding.php");
        }
?>
           
    </table>
</form>
</body>
</html>