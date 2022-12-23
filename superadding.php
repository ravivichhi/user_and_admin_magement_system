<?php






?>
<html>
<head>
  <style>
    body
    {
        padding:0;
        margin:0;
    }
    
    #fun1
    {
        width:100%;
        
    }
    .main
    {
        margin-top:10px;
    }

  </style>
</head>
<body>
<div class="main">
    <form method="post" action="#">
        <table align="center" border="1" cellpadding="0" cellspacing="0" id="fun1">
            <tr id="detail2">
                <th colspan="11">
                <?php
                //  if(isset($_REQUEST["msg1"]))
                //  {
                //     echo "Please try another user";
                //  }
                if(isset($_REQUEST["ed1"]))
                {
                    echo "UPDATE SUPER ADMIN DETAILS";
                }
                else
                {
                    echo "ADD SUPER ADMIN DETAILS";
                }
                ?>    
                </th>
            </tr>
            <tr id="detail1">
                
                <td><input type="text" name="uname" value="<?php if(isset($_REQUEST["ed1"]))
                     { echo $row["uname"];}
                        ?>" placeholder="Enter Username" id="menu"></td>
            
                
                   
                    <td><input type="password" name="pass" value="<?php if(isset($_REQUEST["ed1"]))
                        { echo $row["password"];}
                            ?>" placeholder="Enter Password" id="menu"></td>
                
                    
                        
                        <td><input type="text" name="fname" value="<?php if(isset($_REQUEST["ed1"]))
                            { echo $row["fname"];}
                                ?>" placeholder="Enter Firstname" id="menu"></td>
                    
                            
                            <td><input type="text" name="mname" value="<?php if(isset($_REQUEST["ed1"]))
                                { echo $row["mname"];}
                                    ?>" placeholder="Enter Middlename" id="menu"></td>
                        
                                
                                <td><input type="text" name="lname" value="<?php if(isset($_REQUEST["ed1"]))
                                    { echo $row["lname"];}
                                        ?>" placeholder="Enter Lastname" id="menu"></td>
                           
                                    <td><input type="email" name="email" value="<?php if(isset($_REQUEST["ed1"]))
                                        { echo $row["email"];}
                                            ?>" placeholder="Enter Email" id="menu"></td>
                                
                                        
                                        <td><input type="number" name="number" value="<?php if(isset($_REQUEST["ed1"]))
                                            { echo $row["phone"];}
                                                ?>" placeholder="Enter Phoneno." id="menu"></td>
                                   
                                            
                                            <td><textarea name="address" value="<?php if(isset($_REQUEST["ed1"]))
                                            { echo $row["address"];}
                                            ?>" placeholder="Enter Address" id="menu"></textarea></td>
                                   
                
                <td><select name="country" value="<?php if(isset($_REQUEST["ed1"]))
                { echo $row["country"];}
                ?>" id="menu">
                <?php
                   
                    while($cou=mysqli_fetch_array($cou20))
                    {
                        if($cou["cu_id"]==$row["country"])
                        {
                ?>
                <!-- <option value="0">----Select----</option> -->
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
            
                
                <td>
                <input type="checkbox" name="hob[]" value="cricket" id="menu1"
                <?php
                    if(isset($_REQUEST["ed1"]))
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
                    if(isset($_REQUEST["ed1"]))
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
                    if(isset($_REQUEST["ed1"]))
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
                    if(isset($_REQUEST["ed1"]))
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
            <tr id="detail1">
                <?php
                if(isset($_REQUEST["ed1"]))
                {
                ?>
                    <td colspan="11" align="center">
                            <input type="submit" name="super_update" value="Update" id="submitadd">
                                <input type="submit" name="cancle" value="Cancle" id="submitadd">
                            </td>
                <?php
                }
                else
                {
                ?>
                            <td colspan="11" align="center">
                            <input type="submit" name="super_submit" value="Submit" id="submitadd">
                                <input type="submit" name="cancle" value="Cancle" id="submitadd">
                            </td>
                <?php
                }
                ?>
               
            </tr>
</table>
    </form>
</div>
<?php
// if(isset($_SESSION["superuname"]))
// {
    
   
    
// }
// else
// {
//     header("location:superlogin.php");
// }
// ?>



</body>
</html>