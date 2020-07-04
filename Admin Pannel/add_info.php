
<?php
include_once("config.php");
if (isset($_POST['btn1_submit'])) 
{
    $state_id=$_POST['state_id'];
    $city_name=$_POST['city_name'];
    $city_image=$_POST['image'];
    $city_desc=$_POST['city_desc'];
    $city_history=$_POST['city_history'];
    $city_about_us=$_POST['city_about_us'];

  
$query="insert into tbl_city (state_id,city_name,city_image,city_desc,city_about_us,city_history) values('$state_id','$city_name','$city_image','$city_desc','$city_about_us','$city_history')";

$run=mysqli_query($conn,$query);


if($run)
{

?>
    <!--echo"Data insert successfully...";-->
    <script type="text/javascript">alert("Data inserted successfully");</script>

<?php
}   
else{
    

echo "error".mysqli_error($conn);
   
}


}

//second Button
if (isset($_POST['btn2_submit'])) 
{
    $city_id=$_POST['city_id'];
    $h_name=$_POST['h_name'];
    $h_address=$_POST['h_address'];
    $h_contact=$_POST['h_contact'];
    $h_desc=$_POST['h_desc'];
    $h_ratings=$_POST['h_ratings'];
    $h_timings=$_POST['h_timings'];
    $h_website=$_POST['h_website'];
    $h_image=$_POST['h_image'];

   
  
$query="insert into tbl_hospital (city_id,h_name,h_address,h_contact,h_desc,h_ratings,h_timings,h_website,h_image) values('$city_id','$h_name','$h_address','$h_contact','$h_desc','$h_ratings','$h_timings','$h_website','$h_image')";

$run=mysqli_query($conn,$query);


if($run)
{

?>
    <!--echo"Data insert successfully...";-->
    <script type="text/javascript">alert("Data inserted successfully");</script>

<?php
}   
else{
    

    echo "error".mysqli_error($conn);
   
}
}

//Third College
//second Button
if (isset($_POST['btn3_submit'])) 
{
    $city_id=$_POST['city_id'];
    $s_name=$_POST['s_name'];
    $s_desc=$_POST['s_desc'];
    $s_address=$_POST['s_address'];
      $s_image=$_POST['s_image'];
    $s_contact=$_POST['s_contact'];
    $s_website=$_POST['s_website'];
  

   
  
$query="insert into tbl_college (city_id,s_name,s_desc,s_address,s_image,s_contact,s_website) values('$city_id','$s_name','$s_desc','$s_address','$s_image','$s_contact','$s_website')";

$run=mysqli_query($conn,$query);


if($run)
{

?>
    <!--echo"Data insert successfully...";-->
    <script type="text/javascript">alert("Data inserted successfully");</script>

<?php
}   
else{
    

    echo "error".mysqli_error($conn);
   
}
}

//Restaurants
if (isset($_POST['btn4_submit'])) 
{
    $city_id=$_POST['city_id'];
    $r_name=$_POST['r_name'];
    $r_desc=$_POST['r_desc'];
    $r_address=$_POST['r_address'];
      $r_image=$_POST['r_image'];
      $r_timining=$_POST['r_timining'];
    $r_contact=$_POST['r_contact'];
    $r_website=$_POST['r_website'];
    
    $r_speciality=$_POST['r_speciality'];
    $r_ratings=$_POST['r_ratings'];
    $r_approxcost=$_POST['r_approxcost'];

  

   
  
$query="insert into tbl_restaurant (city_id,r_name,r_image,r_address,r_desc,r_timing,r_speciality,r_ratings,r_approxcost,r_website,r_contact) values('$city_id','$r_name','$r_image','$r_address','$r_desc','$r_timining','$r_speciality','$r_ratings','$r_approxcost','$r_website','$r_contact')";

$run=mysqli_query($conn,$query);


if($run)
{

?>
    <!--echo"Data insert successfully...";-->
    <script type="text/javascript">alert("Data inserted successfully");</script>

<?php
}   
else{
    

    echo "error".mysqli_error($conn);
   
}
}
 //Shop


if (isset($_POST['btn5_submit'])) 
{
    $city_id=$_POST['city_id'];
    $shop_name=$_POST['shop_name'];
    $shop_desc=$_POST['shop_desc'];
      $shop_image=$_POST['shop_image'];
      $shop_address=$_POST['shop_address'];
    
      $shop_timings=$_POST['shop_timings'];
    
  

   
  
$query="insert into tbl_shopping (city_id,shop_name,shop_desc,shop_image,shop_address,shop_timings) values('$city_id','$shop_name','$shop_desc','$shop_image','$shop_address','$shop_timings')";

$run=mysqli_query($conn,$query);


if($run)
{

?>
    <!--echo"Data insert successfully...";-->
    <script type="text/javascript">alert("Data inserted successfully");</script>

<?php
}   
else{
    

    echo "error".mysqli_error($conn);
   
}
}


//Attraction
if (isset($_POST['btn6_submit'])) 
{
    $city_id=$_POST['city_id'];
    $a_name=$_POST['a_name'];
    $a_desc=$_POST['a_desc'];
      $a_image=$_POST['a_image'];
      $a_address=$_POST['a_address'];
    $t_id=$_POST['t_id'];
      $a_timings=$_POST['a_timings'];
    
  

   
  
$query="insert into tbl_attractions (city_id,a_name,a_address,a_timings,a_desc,t_id,a_image) values('$city_id','$a_name','$a_address','$a_timings','$a_desc','$t_id','$a_image')";

$run=mysqli_query($conn,$query);


if($run)
{

?>
    <!--echo"Data insert successfully...";-->
    <script type="text/javascript">alert("Data inserted successfully");</script>

<?php
}   
else{
    

    echo "error".mysqli_error($conn);
   
}
}
//gallery
//Attraction
if (isset($_POST['btn7_submit'])) 
{
      $city_image=$_POST['image'];
      $city_id=$_POST['city_id'];
    
  

   
  
$query="insert into tbl_gallery (city_id,city_image) values('$city_id','$city_image')";

$run=mysqli_query($conn,$query);


if($run)
{

?>
    <!--echo"Data insert successfully...";-->
    <script type="text/javascript">alert("Data inserted successfully");</script>

<?php
}   
else{
    

    echo "error".mysqli_error($conn);
   
}
}


?>
<!DOCTYPE html>
<html lang="en">
<!-- Copied from http://rn53themes.net/themes/demo/lava-admin/listing-add.html by Cyotek WebCopy 1.7.0.600, Monday, September 9, 2019, 6:42:26 PM -->

<head>
    <title> Admin Panel </title>
   <?php include_once("css_file.php");  ?>
</head>
<body>
    <!--== MAIN CONTRAINER == -->
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
                        <li class="active-bre"><a href="#"> Add Details of City</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-add-blog sb2-2-1">
                    <h2>Add New City</h2>
                    <p>Enter the details of City</p>


                    <ul class="nav nav-tabs tab-list">
                        <li class="active"><a data-toggle="tab" href="#home"><i class="fa fa-info" aria-hidden="true"></i> <span>Detail</span></a>
                        </li>
                        <li><a data-toggle="tab" href="#menu1"><i class="fa fa-bed" aria-hidden="true"></i> <span>Hospitals</span></a>
                        </li>
                        <li><a data-toggle="tab" href="#menu3"><i class="fa fa-phone" aria-hidden="true"></i> <span>College</span></a>
                            <li ><a data-toggle="tab" href="#menu4"><i class="fa fa-info" aria-hidden="true"></i> <span>Restaurants</span></a>
                        </li>
                        <li ><a data-toggle="tab" href="#menu5"><i class="fa fa-info" aria-hidden="true"></i> <span>Shopping Places</span></a>
                        </li>
                        <li ><a data-toggle="tab" href="#menu6"><i class="fa fa-info" aria-hidden="true"></i> <span>Attractions</span></a>
                        </li>
                        
                        </li>
                        <li><a data-toggle="tab" href="#menu2"><i class="fa fa-picture-o" aria-hidden="true"></i> <span>Photo Gallery</span></a>
                        </li>
                        
                    </ul>

                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>City Information</h4>
                                    <p>Enter Details</p>
                                </div>
                                <div class="bor">
                                    <form method="POST" action="">
                                        <div class="row">
                                            <?php
                                            $query1="select * from tbl_state";
                                            $result=mysqli_query($conn,$query1);
                                            ?>
                                            <div class="input-field col s6">
                                                <select name="state_id">
                                                    <option value="" disabled="" selected="">-----Select State-----</option>
                                                     <?php while($row1 = mysqli_fetch_array($result)) :; ?>
                                                      <option><?php  echo $row1[0]." $row1[1]"; ?></option>
                                                    <?php endwhile; ?>
                                                    
                                                </select>
                                                <label>Select State</label>
                                            </div>
                                       <div class="input-field col s12">
                                                <input id="list-name" type="text" class="validate" name="city_name">
                                                <label for="list-name">City Name</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea id="textarea1" class="materialize-textarea" name="city_desc"></textarea>
                                                <label for="textarea1">City Description:</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea id="textarea1" class="materialize-textarea" name="city_about_us"></textarea>
                                                <label for="textarea1">About City:</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea id="textarea1" class="materialize-textarea" name="city_history"></textarea>
                                                <label for="textarea1">History:</label>
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
                                                    <input class="file-path validate" type="text" placeholder="Upload Hospital image" name="image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="Submit" class="waves-effect waves-light btn-large" value="Submit" name="btn1_submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <div class="inn-title">
                                <h4>Hospitals Details</h4>
                                <p>Enter Hospital details</p>
                            </div>
                            <div class="bor">
                                <form method="POST" action="">
                                    <div class="row">
                                        <?php
                                            $query1="select * from tbl_city";
                                            $result=mysqli_query($conn,$query1);
                                            ?>
                                        <div class="input-field col s12">
                                            <select name="city_id" >
                                                <option>----Select city----</option>
                                                 <?php while($row1 = mysqli_fetch_array($result)) :; ?>
                                                      <option><?php  echo $row1[0]." $row1[2]"; ?></option>
                                                    <?php endwhile; ?>

                                            </select>
                                            <label>Select City</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="t2-price" type="text" class="validate" name="h_name">
                                            <label for="t2-price">Hospital Name</label>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea4" class="materialize-textarea" name="h_address"></textarea>
                                            <label for="textarea4">Hospital Address</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="t2-price" type="text" class="validate" name="h_contact">
                                            <label for="t2-price">Contact Number:</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea4" class="materialize-textarea" name="h_desc"></textarea>
                                            <label for="textarea4">Hospital Description:</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="t2-price" type="text" class="validate" name="h_ratings">
                                            <label for="t2-price">Ratings</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="t2-price" type="text" class="validate" name="h_timings">
                                            <label for="t2-price">Timings</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="t2-price" type="text" class="validate" name="h_website">
                                            <label for="t2-price">Website</label>
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
                                                    <input class="file-path validate" type="text" placeholder="Upload Hospital image" name="h_image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="submit" class="waves-effect waves-light btn-large" value="Submit" name="btn2_submit">
                                        </div>
                                    </div>
                                </form>
                            </div>

                           
                        </div>

            <div id="menu3" class="tab-pane fade">
                            <div class="inn-title">
                                <h4>College Details</h4>
                                <p>Enter College details</p>
                            </div>
                            <div class="bor">
                                <form method="POST" action="">
                                    <div class="row">
                                        <?php
                                            $query1="select * from tbl_city";
                                            $result=mysqli_query($conn,$query1);
                                            ?>
                                        <div class="input-field col s12">
                                            <select name="city_id" >
                                                <option>----Select city----</option>
                                                 <?php while($row1 = mysqli_fetch_array($result)) :; ?>
                                                      <option><?php  echo $row1[0]." $row1[2]"; ?></option>
                                                    <?php endwhile; ?>

                                            </select>
                                            <label>Select City</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="t2-price" type="text" class="validate" name="s_name">
                                            <label for="t2-price">College Name</label>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea4" class="materialize-textarea" name="s_desc"></textarea>
                                            <label for="textarea4">College Description</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea4" class="materialize-textarea" name="s_address"></textarea>
                                            <label for="textarea4">College Address</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="t2-price" type="text" class="validate" name="s_contact">
                                            <label for="t2-price">Contact Number:</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="t2-price" type="text" class="validate" name="s_website">
                                            <label for="t2-price">Website</label>
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
                                                    <input class="file-path validate" type="text" placeholder="Upload Hospital image" name="s_image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="submit" class="waves-effect waves-light btn-large" value="Submit" name="btn3_submit">
                                        </div>
                                    </div>
                                </form>
                            </div>

                           
                        </div>
                        

                         <div id="menu4" class="tab-pane fade">
                            <div class="inn-title">
                                <h4>Restaurants Details</h4>
                                <p>Enter Restaurant details</p>
                            </div>
                            <div class="bor">
                                <form method="POST" action="">
                                    <div class="row">
                                        <?php
                                            $query1="select * from tbl_city";
                                            $result=mysqli_query($conn,$query1);
                                            ?>
                                        <div class="input-field col s12">
                                            <select name="city_id" >
                                                <option>----Select city----</option>
                                                 <?php while($row1 = mysqli_fetch_array($result)) :; ?>
                                                      <option><?php  echo $row1[0]." $row1[2]"; ?></option>
                                                    <?php endwhile; ?>

                                            </select>
                                            <label>Select City</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="t2-price" type="text" class="validate" name="r_name">
                                            <label for="t2-price">Restaurant Name</label>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea4" class="materialize-textarea" name="r_address"></textarea>
                                            <label for="textarea4">Restaurnat Address</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea4" class="materialize-textarea" name="r_desc"></textarea>
                                            <label for="textarea4">Restaurnat Description</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="t2-price" type="text" class="validate" name="r_timining">
                                            <label for="t2-price">Restaurant Timinings</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="t2-price" type="text" class="validate" name="r_speciality">
                                            <label for="t2-price">Restaurant Speciality</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="t2-price" type="text" class="validate" name="r_ratings">
                                            <label for="t2-price">Restaurant Ratings</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="t2-price" type="text" class="validate" name="r_approxcost">
                                            <label for="t2-price">Approximate Cost</label>
                                        </div>
                                    </div>
                                   <div class="row">
                                        <div class="input-field col s12">
                                            <input id="t2-price" type="text" class="validate" name="r_website">
                                            <label for="t2-price">Website</label>
                                        </div>
                                    </div>
                                   
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="t2-price" type="text" class="validate" name="r_contact">
                                            <label for="t2-price">Contact Number:</label>
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
                                                    <input class="file-path validate" type="text" placeholder="Upload Restaurant image" name="r_image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="submit" class="waves-effect waves-light btn-large" value="Submit" name="btn4_submit">
                                        </div>
                                    </div>
                                </form>
                            </div>

                           
                        </div>
                        

 <div id="menu5" class="tab-pane fade">
                            <div class="inn-title">
                                <h4>Shopping Center Details</h4>
                                <p>Enter Shopping Places </p>
                            </div>
                            <div class="bor">
                                <form method="POST" action="">
                                    <div class="row">
                                        <?php
                                            $query1="select * from tbl_city";
                                            $result=mysqli_query($conn,$query1);
                                            ?>
                                        <div class="input-field col s12">
                                            <select name="city_id" >
                                                <option>----Select city----</option>
                                                 <?php while($row1 = mysqli_fetch_array($result)) :; ?>
                                                      <option><?php  echo $row1[0]." $row1[2]"; ?></option>
                                                    <?php endwhile; ?>

                                            </select>
                                            <label>Select City</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="t2-price" type="text" class="validate" name="shop_name">
                                            <label for="t2-price">Shopping Center Name</label>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea4" class="materialize-textarea" name="shop_desc"></textarea>
                                            <label for="textarea4">Shopping Center Description</label>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea4" class="materialize-textarea" name="shop_address"></textarea>
                                            <label for="textarea4">Shopping Center Address</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="t2-price" type="text" class="validate" name="shop_timings">
                                            <label for="t2-price">Shopping Center Timinings</label>
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
                                                    <input class="file-path validate" type="text" placeholder="Upload Shopping Center image" name="shop_image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="submit" class="waves-effect waves-light btn-large" value="Submit" name="btn5_submit">
                                        </div>
                                    </div>
                                </form>
                            </div>

                           
                        </div>
           



 <div id="menu6" class="tab-pane fade">
                            <div class="inn-title">
                                <h4>Places Of Attraction Details</h4>
                                <p>Enter Places of attraction Places </p>
                            </div>
                            <div class="bor">
                                <form method="POST" action="">
                                    <div class="row">
                                        <?php
                                            $query1="select * from tbl_city";
                                            $result=mysqli_query($conn,$query1);
                                            ?>
                                        <div class="input-field col s12">
                                            <select name="city_id" >
                                                <option>----Select city----</option>
                                                 <?php while($row1 = mysqli_fetch_array($result)) :; ?>
                                                      <option><?php  echo $row1[0]." $row1[2]"; ?></option>
                                                    <?php endwhile; ?>

                                            </select>
                                            <label>Select City</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input id="t2-price" type="text" class="validate" name="a_name">
                                            <label for="t2-price">Place of Attraction Name</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea4" class="materialize-textarea" name="a_address"></textarea>
                                            <label for="textarea4"> Address</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="t2-price" type="text" class="validate" name="a_timings">
                                            <label for="t2-price"> Timinings</label>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <textarea id="textarea4" class="materialize-textarea" name="a_desc"></textarea>
                                            <label for="textarea4"> Description</label>
                                        </div>
                                    </div>
                                    
                                    <?php
                                            $query1="select * from tbl_type_of_place";
                                            $result=mysqli_query($conn,$query1);
                                            ?>
                                        <div class="input-field col s12">
                                            <select name="t_id" >
                                                <option>----Select Type Of Place----</option>
                                                 <?php while($row1 = mysqli_fetch_array($result)) :; ?>
                                                      <option><?php  echo $row1[0]." $row1[1]"; ?></option>
                                                    <?php endwhile; ?>

                                            </select>
                                            <label>Select Type of Place</label>
                                        </div>
                                        
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <div class="file-field input-field">
                                                <div class="btn">
                                                    <span>Image</span>
                                                    <input type="file">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text" placeholder="Upload  image" name="a_image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="submit" class="waves-effect waves-light btn-large" value="Submit" name="btn6_submit">
                                        </div>
                                    </div>
                                </form>
                            </div>

                           
                        </div>
           

                        <div id="menu2" class="tab-pane fade">
                            <div class="inn-title">
                                <h4>Photo Gallery</h4>
                                <p>Upload Images</p>
                            </div>
                            <div class="bor">
                                <form action=" " method="POST">
                                    <div class="row">
                                     <?php
                                            $query1="select * from tbl_city";
                                            $result=mysqli_query($conn,$query1);
                                            ?>
                                        <div class="input-field col s12">
                                            <select name="city_id" >
                                                <option>----Select city----</option>
                                                 <?php while($row1 = mysqli_fetch_array($result)) :; ?>
                                                      <option><?php  echo $row1[0]." $row1[2]"; ?></option>
                                                    <?php endwhile; ?>

                                            </select>
                                            <label>Select City</label>
                                        </div>
                                     </div>
                                     <div class="row">  
                                    <div class="file-field input-field">
                                        <div class="btn">
                                            <span>File</span>
                                            <input type="file" >
                                        </div>
                                        <div class="file-path-wrapper">
                                            <input class="file-path validate" type="text" placeholder="Upload Images" name="image">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input type="submit" class="waves-effect waves-light btn-large" value="Upload" name="btn7_submit">
                                        </div>
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

<!-- Copied from http://rn53themes.net/themes/demo/lava-admin/listing-add.html by Cyotek WebCopy 1.7.0.600, Monday, September 9, 2019, 6:42:26 PM -->
</html>