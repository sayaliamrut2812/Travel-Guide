<?php
	include_once("config.php");

	$uid=$uname=$phone=$email=$city=$zip=$state=$age=$address=$propic="";

	$select_query="select * from tbl_registration where reg_id='".$_SESSION['reg_id']."'";
    $Execute_Q=mysqli_query($conn,$select_query) or die(mysqli_error($conn));
    $fetch=mysqli_fetch_array($Execute_Q);

    $uid = $fetch['reg_id'];
    $uname = $fetch['reg_name'];
    $phone = $fetch['reg_contact'];
    $email  = $fetch['reg_email'];
    $city = $fetch['reg_city'];
    $zip = $fetch['reg_zipcode'];
    $state = $fetch['reg_state'];
    $age = $fetch['reg_age'];
    $address = $fetch['reg_address'];
	$propic = $fetch['reg_image'];
	

	if(isset($_REQUEST['btnchange']))
	{
		
		 $Update="update tbl_registration set reg_name='".$uname."',reg_contact='".$phone."',reg_email='".$email."',reg_city='".$city."',reg_zipcode='".$zip."',reg_state='".$state."',reg_age='".$age."',reg_address='".$address."'reg_image='".$propic."' where reg_id=".$_SESSION['reg_id'];
               //echo $Update;
        $Exe_Insert=mysqli_query($con,$Update)or die(mysqli_error($con));
	}

?>

<!DOCTYPE html>
<html lang="en">

	<head>
	    <?php
			include_once("css_file.php");
		?>
	</head>

	<body>
		<?php
			//header
			include_once("header.php");
		?>

	    <div class="wrapper" >

	        <!--My ACCOUNT-->
	        <div class="kode_banner">
	            <div class="sub-banner">
	                <div class="container">
	                    <h2>My Account</h2>
	                    <p></p>
	                </div>
	            </div>
	            <div class="breadcrumb-blog">
	                <ul class="breadcrumb orange-bg">
	                    <li><a href="index.php">Home</a></li>
	                    <li class="active"><a href="profile.php">My Account</a></li>
	                </ul>
	            </div>
	        </div>
	        <!--My Account ends-->

	        <div class="content">

	            <!--Profile content-->
	            <section style="margin-left:200px;">

	                <div class="container">
	                    <div class="row">                            
	                        <!--Profile-->
	                        <div class="travel-author" style="width: 800px;">
	                           	<div class="travel-author-content">
	                               	<h5>My Profile</h5>
	                          	 	<div class="tags-share margin-top-10" style="width: 700px;">
	                          	 		<form method="post" enctype="multipart/form-data">
	                          	 			<div class="row">
	                          	 				<div><br>

	                          	 					<!--Profile Pic-->
	                          	 					<div style="width:150px; height:150px; background-color: red; float: left;">
		                                                <?php
		                                                  $imageName=$propic;
		                                                  if($imageName=="" || !file_exists("images/ProfileImages/$imageName"))
		                                                  {
		                                                    $imageName="No.png";
		                                                  }
		                                                ?>
		                                                <img src="images/ProfileImages/<?php echo $imageName;?>" alt="profile-photo" class="img-fluid" style="width: 100%;height: 100%;"><br><br>
		                                                <div class="change-photo-btn">
		                                                    <div class="photoUpload">
		                                 					
		                                                        <input type="file" class="upload" name="uploadpic"
		                                                        value="img/ProfileImages/<?php if(isset($fetch))echo("<br>"); echo $fetch['ProfilePic']; ?>">
		                                                        
		                                                        <!--<input type="text" name="txthdnImageNameOld" value="<?php echo $fetch['ProfilePic'];?>"hidden >-->
		                                                    </div>
                                                    	</div>
                                                	</div>
                                                	<!--Profile pic ends -->

                                                	<!--User Data-->
                                                	<div style="float:right; margin-right: 35%;">
														<div >
                                                            <div class="form-group name">
                                                                <label>Name:</label>
                                                               	<input type="text" name="txtname" class="form-control" placeholder="Name" 
                                                               	value="<?php echo $uname; ?>" style="width: 200%;">
                                                            </div>
                                                            <div class="form-group name">
		                                                       	<label>Contact Number:</label>
		                                                       	<input type="text" name="txtphone" class="form-control" disabled name="Phone Number" placeholder="Phone Number" value="<?php echo $phone; ?>" readonly style="width: 200%;" >
                                                           	</div>
                                                           	<div class="form-group name">
                                                            	<label>Email Address:</label>
                                                            	<input type="text" name="txtemail" class="form-control" disabled name="Email Address" placeholder="Email Address"
                                                                value="<?php echo $email; ?>" readonly  style="width: 200%;">
                                                           	</div>
                                                           	 <div class="form-group name">
                                                                <label>Age:</label>
                                                                <input type="text" name="txtage" class="form-control" maxlength="2" placeholder="Age" 
                                                                value="<?php echo $age; ?>" style="width: 200%;">
                                                            </div>
                                                           	<div class="form-group name">
                                                           		<label>Address:</label>
                                                           		<input type="text" name="txtaddress" class="form-control" placeholder="Address"
                                                                value="<?php echo $address; ?>" style="width: 200%;">
                                                           	</div>
                                                           	<div class="form-group name">
                                                           		<label>City:</label>
                                                           		<input type="text" name="txtcity" class="form-control" placeholder="City"
                                                                value="<?php echo $city; ?>" style="width: 200%;">
                                                           	</div>
                                                           	<div class="form-group name">
                                                           		<label>State:</label>
                                                           		<input type="text" name="txtstate" class="form-control" placeholder="State"
                                                                value="<?php echo $state; ?>" style="width: 200%;">
                                                           	</div>
                                                           	<div class="form-group name">
                                                           		<label>ZipCode:</label>
                                                           		<input type="text" name="txtzip" class="form-control" placeholder="Zipcode" maxlength="6"
                                                                value="<?php echo $zip; ?>" style="width: 200%;">
                                                           	</div>

                                                    		<!--Save Changes Button-->
                                                    		<div class="form-group name">
                                                   			 <div class="send-btn">
                                                       		 <center>
                                                        		<button type="submit" class="btn btn-md button-theme" name="btnchange">Save Changes</button>
                                                       		 </center>
                                                   			 </div>
                                                   			 </div>
                                                    		<!--Save Changes Ends-->
                                                        </div>                          
                                                    </div>

                                              		</div>
                                              		<!--User Data Ends-->
	                          	 				</div>
	                          	 			</div> 		
	                          	 		</form>
	                          	 	</div>
	                          	</div>
	                        </div>
						</div>
	                </div>
	            </section>
	        </div>

			<?php
				include_once("footer1.php");
			?>
	    </div>

	    <!-- jQuery -->
	    <script src="js/jquery.js"></script>
		<script src="js/modernizr.custom.js"></script>
	    <!-- jQuery UI LIB AJAX-->
	    <script src="js/jquery-ui/jquery-ui.js"></script>
	    <!-- bootstrap -->
	    <script src="js/bootstrap.min.js"></script>
	    <!-- datepicker -->
	    <script src="js/datepicker.js"></script>
	    <!-- selectric -->
	    <script src="js/selectric.js"></script>
	    <!-- demo -->
	    <script src="js/effects/demo.js"></script>
	    <!-- demo1 -->
	    <script src="js/effects/demo3.js"></script>
	    <!-- easing -->
	    <script src="js/effects/easings.js"></script>
	    <!-- slick -->
	    <script src="js/slick.js"></script>
	    <!-- rateing-stars -->
	    <script src="js/rateing-stars.js"></script>
	    <!-- WEATHER SCRIPTS -->
	    <script src="js/weather.js"></script>
	    <!-- accordian -->
	    <script src="js/map-pins.js"></script>
	    <!-- accordian -->
	    <script src="js/accordian.js"></script>
	    <!-- scrolling-nav -->
	    <script src="js/scrolling-nav.js"></script>
	    <!-- jquery.ripples-min -->
	    <script src="js/jquery.ripples-min.js"></script>
	    <!-- prettyphoto -->
	    <script src="js/prettyphoto/prettyphoto.js"></script>
	    <!-- Responsive SCRIPTS -->
	    <script src="js/responsive-menu/responsive.jquery.js"></script>
	    <!-- custom -->
	    <script src="js/custom.js"></script>

	</body>
</html>