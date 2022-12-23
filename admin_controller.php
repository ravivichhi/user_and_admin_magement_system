<?php
include("admin_model.php");

class admincontroller
{
    function con_login($uname,$pass)
    {
        $obj=new adminmodel;
        $obj->mod_login($uname,$pass);
    }
    function con_admindetail()
    {
        $obj=new adminmodel;
        return $obj->mod_admindetail();
    }
    function con_userdetail()
    {
        $obj=new adminmodel;
        return $obj->mod_userdetail();
    }
    function con_enable($id,$status)
    {
        $obj=new adminmodel;
        $obj->mod_enable($id,$status);
    }
    function con_disable($id,$status)
    {
        $obj=new adminmodel;
        $obj->mod_disable($id,$status);
    }
    function con_ed($id)
    {
        $obj=new adminmodel;
        return $obj->mod_ed($id);
    }
    function con_update($id,$uname,$pass,$fname,$mname,$lname,$email,$number,$address,$country,$hobb)
    {
        $obj=new adminmodel;
        $obj->mod_update($id,$uname,$pass,$fname,$mname,$lname,$email,$number,$address,$country,$hobb);
    }
    function con_submit($uname,$pass,$fname,$mname,$lname,$email,$number,$address,$country,$hobb,$status)
    {
        $obj=new adminmodel;
        $obj->mod_submit($uname,$pass,$fname,$mname,$lname,$email,$number,$address,$country,$hobb,$status);
    }
    function con_country()
    {
        $obj=new adminmodel;
        return $obj->mod_country();
    }
    function con_details($uname)
    {
        $obj=new adminmodel;
        return $obj->mod_details($uname);
    }
    function con_del1($id)
    {
        $obj=new adminmodel;
        $obj->mod_del1($id);
    }
    function con_del($id)
    {
        $obj=new adminmodel;
        $obj->mod_del($id);
    }
    function con_delall($id)
    {
        $obj=new adminmodel;
        $obj->mod_delall($id);
    }
    function con_checkdel($id)
    {
        $obj=new adminmodel;
        $obj->mod_checkdel($id);
    }
    function con_profile($uname)
    {
        $obj=new adminmodel;
        return $obj->mod_profile($uname);
    }
    function con_mainprofile($uname)
    {
        $obj=new adminmodel;
        return $obj->mod_mainprofile($uname);
    }
    function con_submitprofile($file,$uname)
    {
        $obj=new adminmodel;
        $obj->mod_submitprofile($file,$uname);
    }
    function con_remove()
    {
        $obj=new adminmodel;
        $obj->mod_remove();
    }
    function con_superadd($uname,$pass,$fname,$mname,$lname,$email,$number,$address,$country,$hobb)
    {
        $obj=new adminmodel;
        $obj->mod_superadd($uname,$pass,$fname,$mname,$lname,$email,$number,$address,$country,$hobb);
    }
    function con_supered($id)
    {
        $obj=new adminmodel;
        return $obj->mod_supered($id);
    }
    function con_super_update($id,$uname,$pass,$fname,$mname,$lname,$email,$number,$address,$country,$hobb)
    {
        $obj=new adminmodel;
        $obj->mod_super_update($id,$uname,$pass,$fname,$mname,$lname,$email,$number,$address,$country,$hobb);
    }
    function con_supercountry()
    {
        $obj=new adminmodel;
        return $obj->mod_supercountry();
    }
}
if(isset($_REQUEST["login_submit"]))
{
    $uname=$_REQUEST["uname"];
    $pass=$_REQUEST["pass"];
    $obj=new admincontroller;
    $obj->con_login($uname,$pass);
    
}

$obj=new admincontroller;
$admin=$obj->con_admindetail();

$obj=new admincontroller;
$user=$obj->con_userdetail();

if(isset($_REQUEST["enable"]))
{
    $id=$_REQUEST["enable"];
    $status="Enable";
    $obj=new admincontroller;
    $obj->con_enable($id,$status);
    
}
if(isset($_REQUEST["disable"]))
{
    $id=$_REQUEST["disable"];
    $status="Disable";
    $obj=new admincontroller;
    $obj->con_disable($id,$status);
    
}
if(isset($_REQUEST["ed"]))
{
    $id=$_REQUEST["ed"];
    $obj=new admincontroller;
    $sel=$obj->con_ed($id);
    $row=mysqli_fetch_array($sel);
    
}

if(isset($_REQUEST["user_update"]))
{
    $id=$_REQUEST["ed"];
    $uname=$_REQUEST["uname"];
    $pass=$_REQUEST["pass"];
    $fname=$_REQUEST["fname"];
    $mname=$_REQUEST["mname"];
    $lname=$_REQUEST["lname"];
    $email=$_REQUEST["email"];
    $number=$_REQUEST["number"];
    $address=$_REQUEST["address"];
    $country=$_REQUEST["country"];
    $hob=$_REQUEST["hob"];
    $hobb=implode(",",$hob);
    $obj=new admincontroller;
    $obj->con_update($id,$uname,$pass,$fname,$mname,$lname,$email,$number,$address,$country,$hobb);
}
if(isset($_REQUEST["user_submit"]))
{
    $uname=$_REQUEST["uname"];
    $pass=$_REQUEST["pass"];
    $fname=$_REQUEST["fname"];
    $mname=$_REQUEST["mname"];
    $lname=$_REQUEST["lname"];
    $email=$_REQUEST["email"];
    $number=$_REQUEST["number"];
    $address=$_REQUEST["address"];
    $country=$_REQUEST["country"];
    $hob=$_REQUEST["hob"];
    $hobb=implode(",",$hob);
    $status="Enable";
    $obj=new admincontroller;
    $obj->con_submit($uname,$pass,$fname,$mname,$lname,$email,$number,$address,$country,$hobb,$status);
       
}

$obj=new admincontroller;
$cou1=$obj->con_country();


if(isset($_REQUEST["details"]))
{
    $uname=$_REQUEST["details"];
    $obj=new admincontroller;
    $sel1=$obj->con_details($uname);
}

if(isset($_REQUEST["del1"]))
{
    $id=$_REQUEST["del1"];
    $obj=new admincontroller;
    $obj->con_del1($id);
}

if(isset($_REQUEST["del"]))
{
    $id=$_REQUEST["del"];
    $obj=new admincontroller;
    $obj->con_del($id);
    
}
if(isset($_REQUEST["delall"]))
{
    $chk=$_REQUEST["checkbox"];
    $a=implode(",",$chk);
    $obj=new admincontroller;
    $obj->con_delall($id);
    
}
if(isset($_REQUEST["checkdel"]))
{
    $id=$_REQUEST["checkdel"];
    $obj=new admincontroller;
    $obj->con_checkdel($id);
   
    //  header("refresh:");
}
if(isset($_SESSION["superuname"]))
{
    $uname=$_SESSION["superuname"];
    $obj=new admincontroller;
    $sel=$obj->con_profile($uname);
    $photo=mysqli_fetch_array($sel);
}

if(isset($_REQUEST["profile"]))
{
    // $id=$_REQUEST["ed"];
    $uname=$_SESSION["superuname"];
    $obj=new admincontroller;
    $sel=$obj->con_mainprofile($uname);
    $row=mysqli_fetch_array($sel);
}

if(isset($_REQUEST["submit"]))
{
    $file=rand().$_FILES["file"]["name"];
    $uname=$_SESSION["superuname"];
    $obj=new admincontroller;
    $sel=$obj->con_submitprofile($file,$uname);

}

if(isset($_REQUEST["remove"]))
{
    $obj=new admincontroller;
    $obj->con_remove();
}

if(isset($_REQUEST["super_submit"]))
{
    $uname=$_REQUEST["uname"];
    $pass=$_REQUEST["pass"];
    $fname=$_REQUEST["fname"];
    $mname=$_REQUEST["mname"];
    $lname=$_REQUEST["lname"];
    $email=$_REQUEST["email"];
    $number=$_REQUEST["number"];
    $address=$_REQUEST["address"];
    $country=$_REQUEST["country"];
    $hob=$_REQUEST["hob"];
    $hobb=implode(",",$hob);
    $obj=new admincontroller;
    $obj->con_superadd($uname,$pass,$fname,$mname,$lname,$email,$number,$address,$country,$hobb);
}
if(isset($_REQUEST["ed1"]))
{
    $id=$_REQUEST["ed1"];
    $obj=new admincontroller;
    $sel2=$obj->con_supered($id);
    $row=mysqli_fetch_array($sel2);
}
if(isset($_REQUEST["super_update"]))
{
    $id=$_REQUEST["ed1"];
    $uname=$_REQUEST["uname"];
    $pass=$_REQUEST["pass"];
    $fname=$_REQUEST["fname"];
    $mname=$_REQUEST["mname"];
    $lname=$_REQUEST["lname"];
    $email=$_REQUEST["email"];
    $number=$_REQUEST["number"];
    $address=$_REQUEST["address"];
    $country=$_REQUEST["country"];
    $hob=$_REQUEST["hob"];
    $hobb=implode(",",$hob);
    $obj=new admincontroller;
    $obj->con_super_update($id,$uname,$pass,$fname,$mname,$lname,$email,$number,$address,$country,$hobb);
 }

 $obj=new admincontroller;
 $cou20=$obj->con_supercountry();

?>