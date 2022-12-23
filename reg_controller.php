<?php
include("reg_model.php");

class regcontroller
{
    function con_int($uname,$pass,$fname,$mname,$lname,$email,$number,$address,$country,$hob,$status)
    {
        $obj=new regmodel;
        $obj->mod_int($uname,$pass,$fname,$mname,$lname,$email,$number,$address,$country,$hob,$status);
    }
    function con_ed($id)
    {
        $obj=new regmodel;
        return $obj->mod_ed($id);
    }
    function con_update($id,$pass,$fname,$mname,$lname,$email,$number,$address,$country,$hobb)
    {
        $obj=new regmodel;
        $obj->mod_update($id,$pass,$fname,$mname,$lname,$email,$number,$address,$country,$hobb);
    }
    function con_login($uname,$pass,$status,$status1)
    {
        $obj=new regmodel;
        $obj->mod_login($uname,$pass,$status,$status1);
    }
    function con_country()
    {
        $obj=new regmodel;
       return $obj->mod_country();
    }
    function con_detail()
    {
        $obj=new regmodel;
        return $obj->mod_detail();
    }
    function con_profile($uname)
    {
        $obj=new regmodel;
        return $obj->mod_profile($uname);
    }
    function con_movie()
    {
        $obj=new regmodel;
        return $obj->mod_movie();
    }
    function con_changeprofile($file,$uname)
    {
        $obj=new regmodel;
        $obj->mod_changeprofile($file,$uname);
    }
    function con_profileselect($uname)
    {
        $obj=new regmodel;
        return $obj->mod_profileselect($uname);
    }
    function con_detail_submit($movie,$actor,$director,$type,$year,$uname)
    {
        $obj=new regmodel;
        $obj->mod_detail_submit($movie,$actor,$director,$type,$year,$uname);
    }
    function con_detail_update($id,$movie,$actor,$director,$type,$year)
    {
        $obj=new regmodel;
        $obj->mod_detail_update($id,$movie,$actor,$director,$type,$year);
    }
    function con_edcontent($id)
    {
        $obj=new regmodel;
        return $obj->mod_edcontent($id);
    }
    function con_delcontent($id)
    {
        $obj=new regmodel;
        $obj->mod_delcontent($id);
    }
    function con_delall1($b)
    {
        $obj=new regmodel;
        $obj->mod_delall1($b);
    }
    function con_del($id)
    {
        $obj=new regmodel;
        $obj->mod_del($id);
    }
}
if(isset($_REQUEST["submit"]))
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
        $hobb=$_REQUEST["hob"];
        $hob=implode(",",$hobb);
        $status="Enable";
        $obj=new regcontroller;
        $obj->con_int($uname,$pass,$fname,$mname,$lname,$email,$number,$address,$country,$hob,$status);
}
if(isset($_REQUEST["ed"]))
{
    $id=$_REQUEST["ed"];
    $obj=new regcontroller;
    $fetch=$obj->con_ed($id);
    $row=mysqli_fetch_array($fetch);

   
}
if(isset($_REQUEST["update"]))
{
    $id=$_REQUEST["ed"];
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
    $obj=new regcontroller;
    $obj->con_update($id,$pass,$fname,$mname,$lname,$email,$number,$address,$country,$hobb);
    
}
if(isset($_REQUEST["back"]))
{
    header("location:userhome.php");
}

if(isset($_REQUEST["login_submit"]))
{
    $uname=$_REQUEST["uname"];
    $pass=$_REQUEST["pass"];
    $status="Enable";
    $status1="Disable";
    $obj=new regcontroller;
    $obj->con_login($uname,$pass,$status,$status1);
    
}

if(isset($_REQUEST["signup"]))
{
    header("location:reg_view.php");
}


//  country name  //
$obj=new regcontroller;
$cou1=$obj->con_country();

//  user detail details  //

$obj=new regcontroller;
$detail=$obj->con_detail();

//  user profile details  //
if(isset($_SESSION["mvc_uname"]))
{
    $uname=$_SESSION["mvc_uname"];
    $obj=new regcontroller;
    $profile=$obj->con_profile($uname);
    $photo=mysqli_fetch_array($profile);
}




//  user movie details  //

$obj=new regcontroller;
$movie=$obj->con_movie();

if(isset($_REQUEST["profile_submit"]))
{
    $file=rand().$_FILES["file"]["name"];
    $uname=$_SESSION["mvc_uname"];
    $obj=new regcontroller;
    $obj->con_changeprofile($file,$uname);
}
if(isset($_REQUEST["profile"]))
{
    // $id=$_REQUEST["ed"];
    $uname=$_SESSION["mvc_uname"];
    $obj=new regcontroller;
    $select=$obj->con_profileselect($uname);
    $row=mysqli_fetch_array($select);
    
}
if(isset($_REQUEST["edcontent"]))
{
    $id=$_REQUEST["edcontent"];
    $obj=new regcontroller;
    $fetch=$obj->con_edcontent($id);
    $row=mysqli_fetch_array($fetch);
}
if(isset($_REQUEST["detail_submit"]))
{
    $movie=$_REQUEST["movie"];
    $actor=$_REQUEST["actor"];
    $director=$_REQUEST["director"];
    $type=$_REQUEST["type"];
    $year=$_REQUEST["year"];
    $uname=$_SESSION["mvc_uname"];
    $obj=new regcontroller;
    $obj->con_detail_submit($movie,$actor,$director,$type,$year,$uname);
}

if(isset($_REQUEST["detail_update"]))
{

    $id=$_REQUEST["edcontent"];
    $movie=$_REQUEST["movie"];
    $actor=$_REQUEST["actor"];
    $director=$_REQUEST["director"];
    $type=$_REQUEST["type"];
    $year=$_REQUEST["year"];
    $obj=new regcontroller;
    $obj->con_detail_update($id,$movie,$actor,$director,$type,$year);
}

if(isset($_REQUEST["delcontent"]))
{
    $id=$_REQUEST["delcontent"];
    $obj=new regcontroller;
    $obj->con_delcontent($id);
    
}

if(isset($_REQUEST["delall1"]))
{
    $chk=$_REQUEST["checkbox"];
    $b=implode(",",$chk);
    $obj=new regcontroller;
    $obj->con_delall1($b);
    
 }

 if(isset($_REQUEST["del"]))
 {
     $id=$_REQUEST["del"];
     $obj=new regcontroller;
     $obj->con_del($id);
     
 }


?>