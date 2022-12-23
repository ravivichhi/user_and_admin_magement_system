<?php
include("connect.php");
session_start();
class adminmodel extends connect
{
    function mod_login($uname,$pass)
    {
        $sel=mysqli_query($this->con,"select * from superreg where uname='$uname' and password='$pass'");
        $num=mysqli_num_rows($sel);
        if($num==1)
        {
            $sel=mysqli_query($this->con,"select * from superreg where uname='$uname' and password='$pass'");
            $fetch=mysqli_fetch_array($sel);
            $id= $fetch["id"];
            $_SESSION["superuname"]=$uname;
           
            $_SESSION["id1"]=$id;
            header("location:home.php");
        }
        else
        {
            header("location:superlogin.php?msg");
        }
    }
    function mod_admindetail()
    {
        $sel=mysqli_query($this->con,"select * from superreg join country on superreg.country=country.cu_id");
        return $sel;
    }
    function mod_userdetail()
    {
        
        $sel=mysqli_query($this->con,"select * from reg join country on reg.country=country.cu_id");
        return $sel;
    }
    function mod_enable($id,$status)
    {
        $int=mysqli_query($this->con,"update reg set status='$status' where id='$id'");
        header("location:home.php");
    }
    function mod_disable($id,$status)
    {
        $int=mysqli_query($this->con,"update reg set status='$status' where id='$id'");
        unset($_SESSION["uname"]);
        header("location:home.php");
    }
    function mod_ed($id)
    {
        $sel=mysqli_query($this->con,"select * from reg where id='$id'");
        return $sel;
        
    }
    function mod_update($id,$uname,$pass,$fname,$mname,$lname,$email,$number,$address,$country,$hobb)
    {
        $int=mysqli_query($this->con,"update reg set pass='$pass',fname='$fname',mname='$mname',lname='$lname',email='$email',phone='$number',address='$address',country='$country',hobby='$hobb' where id='$id'");
        header("location:home.php?msg2");
    }
    function mod_submit($uname,$pass,$fname,$mname,$lname,$email,$number,$address,$country,$hobb,$status)
    {
        $sel=mysqli_query($this->con,"select * from reg where uname='$uname'");
        $num=mysqli_num_rows($sel);
        
            if($num!=0)
            {
                header("location:home.php?msg1");

            }
            else
            {
                $int=mysqli_query($this->con,"insert into reg (uname,pass,fname,mname,lname,email,phone,address,country,hobby,status) values ('$uname','$pass','$fname','$mname','$lname','$email','$number','$address','$country','$hobb','$status')");
                header("location:home.php?msg");
                     
            }
    }
    function mod_country()
    {
        $sel=mysqli_query($this->con,"select * from country");
        return $sel;
    }
    function mod_details($uname)
    {
        $sel=mysqli_query($this->con,"select * from content where uname='$uname'");
        return $sel;
    }
    function mod_del1($id)
    {
        mysqli_query($this->con,"delete from reg where id='$id'");
        header("location:home.php?delmsg");
    }
    function mod_del($id)
    {
        mysqli_query($this->con,"delete from superreg where id='$id'");
        header("location:home.php?delmsg1");
    }
    function mod_delall($id)
    {
        mysqli_query($this->con,"delete from reg where id in($a)");
        header("location:home.php?delmsg2");
    }
    function mod_checkdel($id)
    {
        mysqli_query($this->con,"delete from content where id='$id'");
    }
    function mod_profile($uname)
    {
        $sel=mysqli_query($this->con,"select * from superreg where uname='$uname'");
        return $sel;
    }
    function mod_mainprofile($uname)
    {
        $sel=mysqli_query($this->con,"select * from superreg where uname='$uname'");
        return $sel;
    }
    function mod_submitprofile($file,$uname)
    {
        $sel=mysqli_query($this->con,"select * from superreg where uname='$uname'");
        $row=mysqli_fetch_array($sel);
        mysqli_query($this->con,"update superreg set filename='$file' where uname='$uname'");
        unlink('upload/'.$row["filename"]);
        move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$file);
        header("location:home.php");
    }
    function mod_remove()
    {
        $file="";
        $uname=$_SESSION["superuname"];
        $sel=mysqli_query($this->con,"select * from superreg where uname='$uname'");
        $row=mysqli_fetch_array($sel);
        mysqli_query($this->con,"update superreg set filename='$file' where uname='$uname'");
        unlink('upload/'.$row["filename"]);
        header("location:home.php");
    }
    function mod_superadd($uname,$pass,$fname,$mname,$lname,$email,$number,$address,$country,$hobb)
    {
        $sel=mysqli_query($this->con,"select * from superreg where uname='$uname'");
        $num=mysqli_num_rows($sel);
        
        if($num!=0)
        {
            // header("location:superadding.php?msg1");

        }
        else
        {
            $int=mysqli_query($this->con,"insert into superreg (uname,password,fname,mname,lname,email,phone,address,country,hobby) values ('$uname','$pass','$fname','$mname','$lname','$email','$number','$address','$country','$hobb')");
            header("location:home.php");
        }
    }
    function mod_supered($id)
    {
        $sel=mysqli_query($this->con,"select * from superreg where id='$id'");
        return $sel;
       
    }
    function mod_super_update($id,$uname,$pass,$fname,$mname,$lname,$email,$number,$address,$country,$hobb)
    {
        $int=mysqli_query($this->con,"update superreg set uname='$uname',password='$pass',fname='$fname',mname='$mname',lname='$lname',email='$email',phone='$number',address='$address',country='$country',hobby='$hobb' where id='$id'");
        header("location:home.php");
    }
    function mod_supercountry()
    {
        $sel=mysqli_query($this->con,"select * from country");
        return $sel;
    }
    
}

?>