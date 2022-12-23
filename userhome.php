<?php
include("reg_controller.php");
ob_start();
if(isset($_REQUEST["cancle"]))
 {
     header("location:userhome.php"); 
}
?>
<script>
    function fun()
    {
        return con=confirm("ARE YOU SURE!! DELETE THIS DATA");
        if(con==true)
        {
            <?php
            ?>
        }
        else
        {
            header("location:userhome.php");
        }
    }
</script>




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
        table
        {
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
        #delete 
        {
            width:70px;
            height:30px;
            background-color:red;
        }
        #header
        {
            background-color:rgb(77, 77, 170);
            
        }
        #header0
        {
            background-color:rgb(77, 77, 170);
            height:120px;
        }
        #navbar
        {
            background-color:rgb(134, 134, 166);
            font-size:16px;
        }
        #detail
        {
            background-color:rgb(134, 134, 166);
        }
        #log
        {
            background-color:brown;
        }
        #detail1
        {
            background-color: rgb(95, 155, 155);
            
        }
        .main
        {
            margin-top:20px;
            width:100%;
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
        #submitadd
        {
            background-color: blue;
            color:white;
            width:100px;
            height:30px;
            margin-left:10px;
            border-radius:10px;
        }
        #conformadd
        {
            background-color:green;
            color:white;
            width:100px;
            height:30px;
            margin-left:10px;
            border-radius:10px;
            position: absolute;
            top:290px;
            right:5px;
        }
        #add1 
        {
            width:100px;
            height:30px;
            border-radius:10px;
            background-color:green;
            float:right;
        }
        #avatar
       {
            
            margin-right:80px;
            width:210px;
            text-align:right;
       }
       #avatar span
       {
        position: absolute;
        width:50px;
        right:220px;
       }
       #avatar span span
       {
        position: absolute;
        width:100px;
        font-size:15px;
        right:-35px;
        top:60px;
        
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
       .layoutpass
       {
        word-break:break-all;
        width:70px;
       }
    </style>
</head>
<body>
    <form method="post">
    <table border="1" cellpadding="10" cellspacing="0">
        <tr id="header0">
            <th colspan="10" style="color:white; font-size:30px;">User Access</th>
            <th style="color:white;" id="avatar">
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
            <span>
                <?php
                    if(isset($_SESSION["mvc_uname"]))
                    {
                        echo "Welcome, ".$_SESSION["mvc_uname"];
                    }
                   else
                   {
                    header("location:login_view.php");
                   }
                ?>
                <span>
                <a href="userhome.php?profile">Change Profile</a>
                </span>
                </span>
            </th>
            <th><button id="log"><a href="logout.php" id="log">Logout</a></button></th>
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
        
        while($fetch=mysqli_fetch_array($detail))
        {
            if($_SESSION["mvc_id"]==$fetch["id"])
            {
        ?>
        <tr id="detail">
            
            <td><?php echo $fetch["id"]; ?></td>
            <td><?php echo $fetch["uname"]; ?></td>
            <td class="layoutpass"><?php echo $fetch["pass"]; ?></td>
            <td><?php echo $fetch["fname"]; ?></td>
            <td><?php echo $fetch["mname"]; ?></td>
            <td><?php echo $fetch["lname"]; ?></td>
            <td><?php echo $fetch["email"]; ?></td>
            <td><?php echo $fetch["phone"]; ?></td>
            <td><?php echo $fetch["address"]; ?></td>
            <td><?php echo $fetch["cu_name"]; ?></td>
            <td><?php echo $fetch["hobby"]; ?></td>
            <td><button><a href="reg_view.php?ed=<?php echo $fetch["id"] ?>">EDIT</a></button> | <button  id="delete"><a href="userhome.php?del=<?php echo $fetch["id"]; ?>" id="delete" onclick="return fun()">DELETE</a></button></td>
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
            include("userprofile.php");
        }
    
        if(isset($_REQUEST["profile"]))
        {
            profile();
        }
    ?>

    <h2 align="center" style="color:blue;">
        <?php
            if(isset($_REQUEST["addmsg"]))
            {
                echo "Details Add Successfull";
                header("refresh:2; url=userhome.php");
            }
        ?>
    </h2>
    <h2 align="center" style="color:blue;">
        <?php
            if(isset($_REQUEST["editmsg"]))
            {
                echo "Details Update Successfull";
                header("refresh:2; url=userhome.php");
            }
        ?>
    </h2>
    <h2 align="center" style="color:red;">
        <?php
            if(isset($_REQUEST["deletemsg"]))
            {
                echo "Details Delete Successfull";
                header("refresh:2; url=userhome.php");
            }
        ?>
    </h2>
    <h2 align="center" style="color:red;">
        <?php
            if(isset($_REQUEST["deleteallmsg"]))
            {
                echo "Details Delete Successfull";
                header("refresh:2; url=userhome.php");
            }
        ?>
    </h2>
    <br>
    <h2 align="center" style="color:blue;">
        <?php
        if(isset($_REQUEST["msg"]))
        {
            echo "Data Inserted Successfull";
            header("refresh:2; url=userhome.php");
        }
    ?>
    </h2>

    <?php
        if(isset($_REQUEST["detailsadd"]))
        {
            
        ?>
        <form>
            <!-- <button  id="add1"><a href="userhome.php?submit" id="add1">Conform</a></button> -->
        </form>
        <?php
        }
        else
        {
        ?>

            <button  id="add1"><a href="userhome.php?detailsadd" id="add1">ADD</a></button>
            
        <?php
        }
        ?>
    
    <?php
        include("contentdetails.php");
    ?>
   
  
    <?php
    function add()
    {
        include("userdetails.php");
    }
    if(isset($_REQUEST["detailsadd"]))
    {
        add();
    }
    ?>
  
 
 
</body>
</html>