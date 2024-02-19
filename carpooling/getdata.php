<?php

require_once("config.php");
// select state then city load via ajax
if(isset($_POST["st"]))
{
    $st=$_POST["st"];
    $select="select * from tbl_city where stateid='$st'";
    $query=mysqli_query($con,$select);
    while($fetch=mysqli_fetch_array($query))
    {
        ?>
        
      <option value='<?php echo $fetch["ctid"];?>'><?php echo $fetch["cityname"];?></option>
      <?php
}
}
?>