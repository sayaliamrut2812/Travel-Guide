<?php
include("config.php");
//if(isset($_POST['delete']))
//{

$id=$_POST['t_id'];   
//echo "$id";
$result = mysqli_query($conn, "DELETE FROM tbl_type_of_place WHERE t_id='$id'") or mysql_error();
//echo "<h2 align='center'><font color=white>Location of id $id Deleted Succesfully.<///font></h2>";
header("Location:view_type_of_places.php");
//}


?>