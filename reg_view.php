<?php
include("reg_controller.php");

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
           
            background-image:url(background.jpg);
            
        }
        table
        {
           margin-top: 35px;
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
            width: 400px;
            margin-left: 550px;
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
        }
        h3
        {
            margin-left: 550px;
            color:white;
            height:10px
        }
        #menu
        {
            margin-left:45px;
            width:300px;
            height:20px;
            border-radius: 10px;
            
        }
        #menu1
        {
            margin-left:45px;
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

    <h3 style="color:green;font-size:20px;">
    <?php
        if(isset($_REQUEST["msg"]))    
        {
            echo "Data Inserted Successfully";
            header("refresh:2; url=reg_view.php");
            
        }
    ?>
    </h3>
    <h3 style="color:red;">
    <?php
        if(isset($_REQUEST["msg1"]))    
        {
            echo "Username Already Excuted Please Try Another Username";
            header("refresh:4; url=reg_view.php");
        }
    ?>
    </h3>
    <div class="main">
    
    <form method="post" action="#" enctype="multipart/form-data">
        <table align="center" cellpadding="10" cellspacing="0">
            <tr>
                <th colspan="2" id="reg">REGISTRATION FORM</th>
            </tr>
            <tr>
                
                <td><input type="text" name="uname" value="<?php
                if(isset($_REQUEST["coned"]))
                {
                    echo $_SESSION["username"];
                }
                if(isset($_REQUEST["ed"]))
                     { echo $row["uname"];}
                        ?>" placeholder="Enter Username" id="menu">
                        <div id="valid_uname"></div></td>
                         
            </tr>
                <tr>
                   
                    <td><input type="password" name="pass" value="<?php
                     if(isset($_REQUEST["coned"]))
                     {
                         echo $_SESSION["pass"];
                     }
                    if(isset($_REQUEST["ed"]))
                        { echo $row["pass"];}
                            ?>" placeholder="Enter Password"  id="menu">
                            <div id="valid_pass"></div> </td>
                </tr>
                    <tr>
                        
                        <td><input type="text" name="fname" value="<?php
                         if(isset($_REQUEST["coned"]))
                         {
                             echo $_SESSION["fname"];
                         }
                        if(isset($_REQUEST["ed"]))
                            { echo $row["fname"];}
                                ?>" placeholder="Enter Firstname"  id="menu">
                                <div id="valid_fname"></div> </td>
                    </tr>
                        <tr>
                            
                            <td><input type="text" name="mname" value="<?php
                             if(isset($_REQUEST["coned"]))
                             {
                                 echo $_SESSION["mname"];
                             }
                            if(isset($_REQUEST["ed"]))
                                { echo $row["mname"];}
                                    ?>" placeholder="Enter Middlename"  id="menu">
                                    <div id="valid_mname"></div> </td>
                        </tr>
                            <tr>
                                
                                <td><input type="text" name="lname" value="<?php
                                 if(isset($_REQUEST["coned"]))
                                 {
                                     echo $_SESSION["lname"];
                                 }
                                if(isset($_REQUEST["ed"]))
                                    { echo $row["lname"];}
                                        ?>" placeholder="Enter Lastname"  id="menu">
                                        <div id="valid_lname"></div> </td>
                            </tr>
                                <tr>
                                    
                                    <td><input type="email" name="email" value="<?php
                                     if(isset($_REQUEST["coned"]))
                                     {
                                         echo $_SESSION["email"];
                                     }
                                    if(isset($_REQUEST["ed"]))
                                        { echo $row["email"];}
                                            ?>" placeholder="Enter Email"  id="menu">
                                            <div id="valid_email"></div> </td>
                                </tr>
                                    <tr>
                                        
                                        <td><input type="number" name="number" value="<?php
                                         if(isset($_REQUEST["coned"]))
                                         {
                                             echo $_SESSION["number"];
                                         }
                                        if(isset($_REQUEST["ed"]))
                                            { echo $row["phone"];}
                                                ?>" placeholder="Enter Phoneno."  id="menu">
                                                <div id="valid_phone"></div> </td>
                                    </tr>
                                        <tr>
                                            
                                            <td><textarea name="address" value="<?php
                                             if(isset($_REQUEST["coned"]))
                                             {
                                                 echo $_SESSION["address"];
                                             }
                                            if(isset($_REQUEST["ed"]))
                                            { echo $row["address"];}
                                            ?>" placeholder="Enter Address" id="menu"></textarea>
                                            <div id="valid_address"></div> </td>
                                    </tr>
            <tr>
                
                <td><select name="country" id="menu">
                <option>----Select-----</option>
                <?php
                    
                    
                    while($cou=mysqli_fetch_array($cou1))
                    {
                        if($cou["cu_id"]==$row["country"])
                        {
                ?>
               
                    <option value="<?php echo $cou["cu_id"];?>" selected><?php echo $cou["cu_name"];?></option>
                <?php
                    }
                    else
                    {
                        ?>
                        <option value="<?php echo $cou["cu_id"];?>"><?php echo $cou["cu_name"];?></option>
                        <?php
                    }
                }
                ?>
                    </select>
              
                </td>
            </tr>
           
            <tr>
                
                <td>
                <input type="checkbox" name="hob[]" value="cricket" id="menu1"
                <?php
                if(isset($_REQUEST["coned"]))
                {
                    $ck=$_SESSION["hob"];
                    $arr=explode(",",$ck);
                    if(in_array('cricket',$arr))
                    {
                        echo "checked";
                    }
                }
                
                    if(isset($_REQUEST["ed"]))
                    {
                        $ck=$row["hobby"];
                        $arr=explode(",",$ck);
                        if(in_array('cricket',$arr))
                        {
                            echo "checked";
                        }
                    }
                ?>
                >Cricket
                    <input type="checkbox" name="hob[]" value="vollyball" id="menu1"
                    <?php
                    if(isset($_REQUEST["coned"]))
                    {
                        $ck=$_SESSION["hob"];
                        $arr=explode(",",$ck);
                        if(in_array('vollyball',$arr))
                        {
                            echo "checked";
                        }
                    }
                    if(isset($_REQUEST["ed"]))
                    {
                        $ck=$row["hobby"];
                        $arr=explode(",",$ck);
                        if(in_array('vollyball',$arr))
                        {
                            echo "checked";
                        }
                    }
                ?>
                >Vollyball<br>
                        <input type="checkbox" name="hob[]" value="hocky" id="menu1"
                        <?php
                        if(isset($_REQUEST["coned"]))
                        {
                            $ck=$_SESSION["hob"];
                            $arr=explode(",",$ck);
                            if(in_array('hocky',$arr))
                            {
                                echo "checked";
                            }
                        }
                    if(isset($_REQUEST["ed"]))
                    {
                        $ck=$row["hobby"];
                        $arr=explode(",",$ck);
                        if(in_array('hocky',$arr))
                        {
                            echo "checked";
                        }
                    }
                ?>
                        >Hockey
                            <input type="checkbox" name="hob[]" value="football" id="menu1"
                            <?php
                             if(isset($_REQUEST["coned"]))
                             {
                                 $ck=$_SESSION["hob"];
                                 $arr=explode(",",$ck);
                                 if(in_array('football',$arr))
                                 {
                                     echo "checked";
                                 }
                             }
                            
                    if(isset($_REQUEST["ed"]))
                    {
                        $ck=$row["hobby"];
                        $arr=explode(",",$ck);
                        if(in_array('football',$arr))
                        {
                            echo "checked";
                        }
                    }
                ?>
                            >Football
                </td>
            </tr>
            <tr>
                <?php
                    if(isset($_REQUEST["ed"]))
                    {
                ?>
                        <td colspan="2" align="center">
                            <input type="submit" name="update" value="Update" id="submit"><br>
                                 <input type="submit" name="back" value="Back" id="submit"></td>
                <?php
                    }
                    else
                    {
                ?>
                        <td colspan="2" align="center">
                            <input type="submit" name="submit" value="Submit" id="submit"><br>
                                <input type="reset" name="Clear" value="Reset" id="submit">
                        </td>
                <?php
                    }
                ?>
            </tr>


        </table>
    </form>
</div>
<img src="download.png">

</body>
</html>