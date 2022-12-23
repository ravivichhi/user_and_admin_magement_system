<?php
ob_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <style>
        #all
        {
            width:100px;
            height:30px;
            margin-top:5px;
            background-color:red;
            float:left;
            margin-right:-600px;
            color:white;
            border-radius:10px;
        }
        #all a
        {
            background-color:red;
        }
        #all:hover
        {
            opacity: 0.8;
        }
       

    </style>
</head>
<body>
<form method="post">
<table border="1" cellpadding="0" cellspacing="0" class="main">
        <tr id="header">
            <th colspan="10" style="color:white; font-size:30px;"><input type="submit" name="delall1" value="DELETE ALL" id="all" onclick="return fun()">CONTAIN DETAILS</th>
           </tr>
        <tr id="navbar">
            <th>Select</th>
            <th>Id</th>
            <th>Movie Title</th>
            <th>Leading Actor</th>
            <th>Director</th>
            <th>Type</th>
            <th>Year</th>
            <th>Action</th>
        </tr>
        <?php
       
            $n=1;
            while($n<=1)
            {
                
                while($fetch=mysqli_fetch_array($movie))
                {
                 if($_SESSION["mvc_uname"]==$fetch["uname"])
                 {

                 
            ?>
            <tr id="detail">
                <td align="center"><input type="checkbox" name="checkbox[]" value="<?php echo $fetch["id"]; ?>"></td>
                <td align="center"><?php echo $n; ?></td>
                <td><?php echo $fetch["movie"]; ?></td>
                <td><?php echo $fetch["actor"]; ?></td>
                <td><?php echo $fetch["director"]; ?></td>
                <td><?php echo $fetch["type"]; ?></td>
                <td><?php echo $fetch["year"]; ?></td>
                <td align="center"><button><a href="userhome.php?edcontent=<?php echo $fetch["id"] ?>">EDIT</a></button> | <button  id="delete"><a href="userhome.php?delcontent=<?php echo $fetch["id"]; ?>" id="delete" onclick="return fun()">DELETE</a></button></td>
            </tr>
            <?php
            $n++;
                 }
             
                }
                 break;
            }
        
        ?>
      
    </table>
    </form>
<?php
if(isset($_REQUEST["edcontent"]))
{
    include("userdetails.php");
}

?>
    
    </body>
</html>
