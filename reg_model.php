<?php
include("connect.php");
session_start();
class regmodel extends connect
{
    function mod_int($uname,$pass,$fname,$mname,$lname,$email,$number,$address,$country,$hob,$status)
    {
        $sel=mysqli_query($this->con,"select * from reg where uname='$uname'");
        $num=mysqli_num_rows($sel);
        if($num!=0)
        {
            header("location:reg_view.php?msg1");
        }
        else
        {
            $int=mysqli_query($this->con,"INSERT INTO `reg`(`uname`, `pass`, `fname`, `mname`, `lname`, `email`, `phone`, `address`, `country`, `hobby`, `status`) VALUES ('$uname','$pass','$fname','$mname','$lname','$email','$number','$address','$country','$hob','$status')");
            header("location:reg_view.php?msg");
        }
        
    }
    function mod_ed($id)
    {
        $sel=mysqli_query($this->con,"select * from reg where id='$id'");
        return $sel;
       
    }
    function mod_update($id,$pass,$fname,$mname,$lname,$email,$number,$address,$country,$hobb)
    {
        $int=mysqli_query($this->con,"update reg set pass='$pass',fname='$fname',mname='$mname',lname='$lname',email='$email',phone='$number',address='$address',country='$country',hobby='$hobb' where id='$id'");
        header("location:userhome.php");
        
    }
    function mod_login($uname,$pass,$status,$status1)
    {
        $sel1=mysqli_query($this->con,"select * from reg where status='$status1' and uname='$uname'");
        $num1=mysqli_num_rows($sel1);
        if($num1==0)
        {
            $sel=mysqli_query($this->con,"select * from reg where uname='$uname' and pass='$pass'");
            $num=mysqli_num_rows($sel);
            if($num==1)
            {
                $sel=mysqli_query($this->con,"select * from reg where uname='$uname' and pass='$pass'");
                $fetch=mysqli_fetch_array($sel);
                $id= $fetch["id"];
                $_SESSION["mvc_uname"]=$uname;
                $_SESSION["mvc_id"]=$id;
                header("location:userhome.php");
            }
        else
            {
                header("location:login_view.php?msg");
            }
        }
        else
        {
            header("location:login_view.php?msg1");
        }
    }

    function mod_country()
    {
        $sel=mysqli_query($this->con,"select * from country");
        return $sel;
    }
    function mod_detail()
    {
        $sel=mysqli_query($this->con,"select * from reg join country on reg.country=country.cu_id");
        return $sel;
    }
    function mod_profile($uname)
    {
       
        $sel=mysqli_query($this->con,"select * from reg where uname='$uname'");
        return $sel;
    }
    function mod_movie()
    {
        
        $sel=mysqli_query($this->con,"select * from content");
        return $sel;
    }
    function mod_changeprofile($file,$uname)
    {
        $sel=mysqli_query($this->con,"select * from reg where uname='$uname'");
        $row=mysqli_fetch_array($sel);
        mysqli_query($this->con,"update reg set filename='$file' where uname='$uname'");
        unlink('upload/'.$row["filename"]);
        move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$file);
        header("location:userhome.php");
    }
    function mod_profileselect($uname)
    {
        $sel=mysqli_query($this->con,"select * from reg where uname='$uname'");
        return $sel;
    }
    function mod_detail_submit($movie,$actor,$director,$type,$year,$uname)
    {

            $int=mysqli_query($this->con,"insert into content (movie,actor,director,type,year,uname) values ('$movie','$actor','$director','$type','$year','$uname')");
            header("location:userhome.php?addmsg");
      
    }
    function mod_detail_update($id,$movie,$actor,$director,$type,$year)
    {
        $int=mysqli_query($this->con,"update content set movie='$movie',actor='$actor',director='$director',type='$type',year='$year' where id='$id'");
        header("location:userhome.php?editmsg");
    }
    function mod_edcontent($id)
    {
        $sel1=mysqli_query($this->con,"select * from content where id='$id'");
        return $sel1;
    }
    function mod_delcontent($id)
    {
        mysqli_query($this->con,"delete from content where id='$id'");
        header("location:userhome.php?deletemsg");
    }
    function mod_delall1($b)
    {
        mysqli_query($this->con,"delete from content where id in($b)");
        header("location:userhome.php?deleteallmsg");
    }
    function mod_del($id)
    {
        mysqli_query($this->con,"delete from reg where id='$id'");
        header("location:logout.php");
    }
}

?>