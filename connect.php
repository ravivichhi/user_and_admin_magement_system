<?php

class connect
{
      var $hostname="localhost";
      var $username="root";
      var $password="";
      var $db_name="assignment";
    function __construct()
    {
        $this->con=mysqli_connect($this->hostname,$this->username,$this->password,$this->db_name);
        if(!$this->con)
        {
            echo "Data base not connect";
        }
    }
   
}




?>