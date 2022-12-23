
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #check
        {
            width:100%;
            margin-top:10px;
            /* float:left; */
        }
        #sumitadd
        {
            width:100px;
           
        }
        #detail1
        {
            background-color: rgb(95, 155, 155);
        }


    </style>
</head>
<body>
<form method="post">
<table border="1" cellpadding="0" cellspacing="0" class="main" id=check>
        <tr id="header">
            <th colspan="7" style="color:white; font-size:30px;">USER CONTAIN DETAILS</th>
            
           </tr>
        <tr id="navbar">
            <th>Id</th>
            <th>Movie Title</th>
            <th>Leading Actor</th>
            <th>Director</th>
            <th>Type</th>
            <th>Year</th>
            <th>Action</th>
        </tr>
        
        <?php
       
            
            while($fetch=mysqli_fetch_array($sel1))
            {
        
        ?>
        <tr id="navbar">

            <td align="center"><?php echo $fetch["id"]; ?></td>
            <td><?php echo $fetch["movie"]; ?></td>
            <td><?php echo $fetch["actor"]; ?></td>
            <td><?php echo $fetch["director"]; ?></td>
            <td><?php echo $fetch["type"]; ?></td>
            <td><?php echo $fetch["year"]; ?></td>
            <td align="center"><button><a href="home.php?checked=<?php echo $fetch["id"] ?>">EDIT</a></button> | <button  id="delete"><a href="home.php?checkdel=<?php echo $fetch["id"]; ?>" id="delete" onclick="return fun()">DELETE</a></button></td>
        </tr>
        <?php
        }
        
        ?>
      
    </table>
    </form>
    <?php
    if(isset($_REQUEST["details"]))
    {
    ?>
    <button id="sumitadd"><a href="home.php?back">Back</a></button>
    <?php
    }
    ?>
    </body>
</html>