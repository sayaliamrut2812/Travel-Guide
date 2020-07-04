<?php
include("config.php");
//if(isset($_POST['delete']))
//{

$id=$_POST['shop_id'];   
//echo "$id";
$result = mysqli_query($conn, "DELETE FROM tbl_shopping WHERE shop_id='$id'") or mysql_error();
//echo "<h2 align='center'><font color=white>Location of id $id Deleted Succesfully.<///font></h2>";
header("Location:all_shopping_places.php");
//}


?>