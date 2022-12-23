<html>
<head>
  
</head>
<body>
<div class="main">
    <form method="post" action="#">
       
        <table align="center" border="1" cellpadding="10" cellspacing="0" id="fun">
            <tr id="detail2">
                <th colspan="11">
                <?php
                if(isset($_REQUEST["edcontent"]))
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
            <tr id="detail1">
                
                <td><input type="text" name="movie" value="<?php 
                if(isset($_REQUEST["edcontent"]))
                     { 
                        echo $row["movie"]; 
                    }
                        ?>" placeholder="Movie Title" id="menu"></td>
            
                
                   
                    <td><input type="text" name="actor" value="<?php if(isset($_REQUEST["edcontent"]))
                        { echo $row["actor"];}
                            ?>" placeholder="Leading Actor" id="menu"></td>
                
                    
                        
                        <td><input type="text" name="director" value="<?php if(isset($_REQUEST["edcontent"]))
                            { echo $row["director"];}
                                ?>" placeholder="Director" id="menu"></td>
                    
                            
                            <td><input type="text" name="type" value="<?php if(isset($_REQUEST["edcontent"]))
                                { echo $row["type"];}
                                    ?>" placeholder="Type" id="menu"></td>
                        
                                
                                <td><input type="text" name="year" value="<?php if(isset($_REQUEST["edcontent"]))
                                    { echo $row["year"];}
                                        ?>" placeholder="Year" id="menu"></td>
            <tr id="detail1">
            <?php
                if(isset($_REQUEST["edcontent"]))
                {
                ?>
                            <td colspan="11" align="center">
                            <input type="submit" name="detail_update" value="Update" id="submitadd">
                            <input type="submit" name="cancle" value="Cancle" id="submitadd">
                            </td>
                            <?php
                }
                else
                {
                ?>
                <td colspan="11" align="center">
                            <input type="submit" name="detail_submit" value="Conform" id="conformadd">
                                <input type="reset" name="clear" value="Clear" id="submitadd">
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