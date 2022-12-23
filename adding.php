<?php

ob_start();
?>
<html>
<head>
<style>
    #fun
    {
        width:100%;
        height:20px;
    }
    #detail1
    {
        height:10px;
    }
    


</style>
</head>
<body>
<div class="main">
    <form method="post" action="#">
        <table align="center" border="1" cellpadding="0" cellspacing="0" id="fun">
            <tr id="detail2">
                <th colspan="11">
                <?php
                if(isset($_REQUEST["ed"]))
                {
                    echo "UPDATE USER DETAILS";
                }
                else
                {
                    echo "ADD USER DETAILS";
                }
                ?>    
                </th>
            </tr>
            <tr id="detail1" class="content">
                
                <td><input type="text" name="uname" value="<?php if(isset($_REQUEST["ed"]))
                { echo $row["uname"];}
                ?>" placeholder="Enter Username" id="menu"></td>
                <td><input type="password" name="pass" value="<?php if(isset($_REQUEST["ed"]))
                { echo $row["pass"];}
                ?>" placeholder="Enter Password" id="menu"></td>
                <td><input type="text" name="fname" value="<?php if(isset($_REQUEST["ed"]))
                { echo $row["fname"];}
                ?>" placeholder="Enter Firstname" id="menu"></td>
                <td><input type="text" name="mname" value="<?php if(isset($_REQUEST["ed"]))
                { echo $row["mname"];}
                ?>" placeholder="Enter Middlename" id="menu"></td>
                <td><input type="text" name="lname" value="<?php if(isset($_REQUEST["ed"]))
                { echo $row["lname"];}
                ?>" placeholder="Enter Lastname" id="menu"></td>
                <td><input type="email" name="email" value="<?php if(isset($_REQUEST["ed"]))
                { echo $row["email"];}
                ?>" placeholder="Enter Email" id="menu"></td>
                <td><input type="number" name="number" value="<?php if(isset($_REQUEST["ed"]))
                { echo $row["phone"];}
                ?>" placeholder="Enter Phoneno." id="menu"></td>
                <td><textarea name="address" value="<?php if(isset($_REQUEST["ed"]))
                { echo $row["address"];}
                ?>" placeholder="Enter Address" id="menu"></textarea></td>
                <td><select name="country" value="<?php if(isset($_REQUEST["ed"]))
                { echo $row["country"];}
                ?>" id="menu">
                <?php
                    
                    while($cou=mysqli_fetch_array($cou1))
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
                <tr id="detail1">
                <?php
                    if(isset($_REQUEST["ed"]))
                    {
                    ?>
                                <td colspan="11" align="center">
                                <input type="submit" name="user_update" value="Update" id="submitadd">
                                    <input type="submit" name="cancle" value="Cancle" id="submitadd">
                                </td>
                                <?php
                    }
                    else
                    {
                    ?>
                <td colspan="11" align="center">
                            <input type="submit" name="user_submit" value="Submit" id="submitadd">
                                <input type="submit" name="cancle" value="Cancle" id="submitadd">
                            </td>
                    <?php
                    }
                    ?>
               
                </tr>


        </table>
    </form>
</div>
</body>
</html>