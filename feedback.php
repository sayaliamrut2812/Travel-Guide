<!DOCTYPE html>
<html lang="en">

	<head>
	    <?php
			include_once("css_file.php");
			include_once("config.php");

			$uid=$uname=$email=$sub=$comment="";

			$select_query="select * from tbl_registration where reg_id='".$_SESSION['reg_id']."'";
    		$Execute_Q=mysqli_query($conn,$select_query) or die(mysqli_error($conn));
   		    $fetch=mysqli_fetch_array($Execute_Q);

   		    $uid=$fetch['reg_id'];
   		    $uname=$fetch['reg_name'];
   		    $email=$fetch['reg_email'];
   		    
   		    if(isset($_POST['btnsubmit']))
			{
				$sub=$_POST['txtsubject'];
   		   	    $comment=$_POST['txtcomment'];

   		    	$query="insert into tbl_feedback (r_id,f_name,f_email,f_subject,feedback) values('$uid','$uname','$email','$sub','$comment')";
            	$run=mysqli_query($conn,$query);

				if($run)
				{

		?>
    			<!--echo"Data insert successfully...";-->
    			<script type="text/javascript">alert("Data inserted successfully");</script>

		<?php
				}   
				else
				{
    				echo "error".mysqli_error($conn);
   				}
   			} 
		?>
	</head>

	<body>
		<?php
			//header
			include_once("header.php");
		?>

	    <div class="wrapper" >

	    	<div class="kode_banner">
	            <!--Sub banner for inner pages-->
	            <div class="sub-banner">
	                <div class="container">
	                    <h2>FeedBack</h2>
	                </div>
	            </div>
	            <div class="breadcrumb-blog">
	                <ul class="breadcrumb orange-bg">
	                    <li><a href="profile.php">My profile</a></li>
	                    <li class="active"><a href="feedback.php">Feedback</a></li>
	                </ul>
	            </div>
	        </div>
	        <div class="content">
	            <!--Travel Blog Detail Content-->
	            <section>
	                <div class="container">
	                    <div class="row">
	                                <form method="post">
	                                    <div class="margin-bottom-30"></div>
	                                    
	                                    <div class="travel-message-box">
	                                        <!--Travel heading-->
	                                        <div class="heading text-align-left">
	                                            <h5 class="title-style-1">Leave Us a Reply</h5>
	                                        </div>
	                                        <div class="form-box">
	                                            <div class="row">
	                                                <div class="col-md-6">
	                                                    <div class="text-felid">
	                                                        <input type="text" name="txtname" class="form-control" disabled name="Name" placeholder="Name" value="<?php echo $uname; ?>" readonly >
	                                                    </div>
	                                                    <div class="text-felid">
	                                                        <input type="text" name="txtemail" class="form-control" disabled name="Email Address" placeholder="Email" value="<?php echo $email; ?>" readonly >
	                                                    </div>
	                                                    <div class="text-felid">
	                                                        <input type="text" name="txtsubject" placeholder="Subject">
	                                                    </div>
	                                                </div>
	                                                <div class="col-md-6">
	                                                    <div class="text-area">
	                                                        <textarea name="txtcomment" placeholder="Comments"></textarea>
	                                                    </div>
	                                                    <div class="submit-btn">
	                                                        <button type="submit" class=" btn-normal-1 effect2-color-1" name="btnsubmit">Send Message</button>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </form>
	                                <!--Travel commenting form ends-->
	                            </div>
	                            <!--Travel commenting blog ends-->
	                        </div>
	                    
	            </section>
	        </div>

			<?php
				include_once("footer.php");
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