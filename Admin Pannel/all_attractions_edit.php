﻿<!DOCTYPE html>
<html lang="en">
<!-- Copied from http://rn53themes.net/themes/demo/lava-admin/user-edit.html by Cyotek WebCopy 1.7.0.600, Monday, September 9, 2019, 6:42:26 PM -->

<head>
      <title> Admin Panel </title>
   <?php include_once("css_file.php");  ?>

</head>

<body>
    <?php
    include_once("config.php");
           $a_id=$_REQUEST['id'];

  /*  $city_id=$city_name=$city_image=$city_desc=$city_about_us=$city_history="";*/

    $select_query="select * from tbl_attractions where a_id=".$a_id;
    $Execute_Q=mysqli_query($conn,$select_query) or die(mysqli_error($conn));
    $fetch=mysqli_fetch_array($Execute_Q);

    /*$city_id = $fetch['city_id'];
    $city_name = $fetch['city_name'];
    $city_image = $fetch['city_image'];
    $city_desc = $fetch['city_desc'];
    $city_about_us = $fetch['city_about_us'];
    $city_history = $fetch['city_history'];*/
    

    if(isset($_REQUEST['btn_submit']))
    {
       
echo "<br><br><br><br>";
         $Update="update tbl_attractions set a_name='".$_REQUEST['a_name']."',a_address='".$_REQUEST['a_address']."',a_timings='".$_REQUEST['a_timings']."',a_desc='".$_REQUEST['a_desc']."',a_image='".$_REQUEST['a_image']."' where a_id=".$a_id;
        //       echo $Update;
        $Exe_Insert=mysqli_query($conn,$Update) or die(mysqli_error($conn));

        if($Exe_Insert)
        {
            header("location:all_attractions.php");
?>

            <script type="text/javascript">alert("Data Changed successfully");</script>

<?php
        }
        else
        {

            echo "error".mysqli_error($conn);
        }
    }
    ?>
    <!--== MAIN CONTRAINER ==-->
   <?php include_once("header.php") ?>
  
    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
             <?php include_once("sidebar.php") ?>
            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Ui Form</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Edit Places of Attraction Details</h4>
                                </div>
                                <div class="tab-inn">
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <?php
/*
            
            $query = "SELECT * FROM tbl_city where city_id=$city_id; ";  
                $result = mysqli_query($conn,$query);
                if($result->num_rows!=0)
                {  
                    while($row=$result->fetch_array())  
                    {
                         $city_id=$row['city_id'];
                            $city_name=$row['city_name'];
                            $city_image=$row['city_image'];
                            $city_desc=$row['city_desc'];
                            $city_history=$row['city_history'];
                            $city_about_us=$row['city_about_us']; */
                  ?>
            
              
                                            <div class="input-field col s6">
                                                <input id="first_name" name="a_name" type="text" value="<?php echo $fetch['a_name']; ?>" class="validate">
                                                <label for="first_name">Attraction Place</label>
                                            </div>
                                            
                                            
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea id="textarea1" class="materialize-textarea" name="a_address" >"<?php echo $fetch['a_address']; ?></textarea>
                                                <label for="textarea1">Address:</label>
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="input-field col s12">
                                                <textarea id="textarea1" class="materialize-textarea" name="a_timings" >"<?php echo $fetch['a_timings']; ?></textarea>
                                                <label for="textarea1">Timinings</label>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea id="textarea1" class="materialize-textarea" name="a_desc" >"<?php echo $fetch['a_desc']; ?></textarea>
                                                <label for="textarea1">Description</label>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                        <div class="input-field col s12">
                                            <div class="file-field input-field">
                                                <div class="btn">
                                                    <span>Image</span>
                                                    <input type="file">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text" placeholder="Upload Hospital image" name="a_image" value="<?php echo $fetch['a_image']; ?>">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="submit" class="waves-effect waves-light btn-large" name="btn_submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php 
                                        //}}?>

    <!--== BOTTOM FLOAT ICON ==-->
    <section>
        <div class="fixed-action-btn vertical">
            <a class="btn-floating btn-large red pulse">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a>
                </li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a>
                </li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a>
                </li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a>
                </li>
            </ul>
        </div>
    </section>

    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>

<!-- Copied from http://rn53themes.net/themes/demo/lava-admin/user-edit.html by Cyotek WebCopy 1.7.0.600, Monday, September 9, 2019, 6:42:26 PM -->
</html>