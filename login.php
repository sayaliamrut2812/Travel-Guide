<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from kodeforest.net/html/bon-voyage/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Aug 2019 15:56:48 GMT -->
<?php


include_once("config.php");

//$conn=mysqli_connect("localhost","root","","Travel");


if (isset($_REQUEST['submit'])) 
{
    # code...

    echo $email=$_REQUEST["email"];
    echo $password=$_REQUEST["password"]; 

    
    $result=mysqli_query($conn,"select * from tbl_registration where reg_email='$email' and reg_password='$password'");

    $row=mysqli_fetch_array($result);

    if($row['reg_email']==$email && $row['reg_password']==$password)
    {
        //echo "login success!! welcome ".$row['reg_email'];
        session_start();
	   $_SESSION['reg_id']=$row['reg_id'];
	   $_SESSION['email']=$email;
	   $_SESSION['username']=$reg_name;
	   header("location:index.php");
	   
    }
    else
    {
             
     echo '<script>alert("Invalid Email or password")</script>';
     //header("Location: index.html");

    }
}




?>
<head>
	<?php
		include_once("css_file.php");
	?>
	<style type="text/css">
	body, html {
  height: 100%;
  margin: 0;
}
		
.bg {
  /* The image used */
  background-image: url("images/signimage.jpeg");

  /* Full height */
  height: 120%; 
 /* background: rgba(200, 54, 54, 0.5);
  /* Center and scale the image nicely 
  background-position: center;*/
  background-repeat: no-repeat;
  background-size: cover;
}
	</style>	
	</head>
	<body >
		<!--  style="background-image: url(extra-images/breadcrumb.jfif); background-repeat: no-repeat; height: 100%; position: all;" -->
            
		<div class="bg" >
            <?php
                include_once("header.php")
            ?>
        
		<div class="pre-loader">
			<div class="pre-loader-img"></div>
		</div>
		<div class="wrapper" >

			<section>
				<div class="container" >
					<div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6">
                            <div class="form-03">
                                <form method="POST" >
                                    <div class="login-form">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="travel-login ">
                                                    <h4 class="title-01">Login</h4>
                                                    <h5 class="title-anchor">Not a member yet? <a href="register.php">Sign up!</a></h5>
                                                    <div class="text-felid label-effect margin-bottom-30">
                                                        <span><i class="fa fa-user-o" aria-hidden="true"></i></span>
                                                        <div class="kf_felids">
                                                            <input class="ipd" type="text" data-new-placeholder=" E-mail" placeholder="Enter your E-mail" name="email">
                                                        </div>
                                                    </div>
                                                    <div class="text-felid label-effect margin-bottom-30">
                                                        <span><i class="fa fa-key" aria-hidden="true"></i></span>
                                                        <div class="kf_felids">
                                                            <input class="ipd" type="password" data-new-placeholder="Your Password" placeholder="Enter Password Email" name="password">
                                                        </div>
                                                    </div>
                                                    <div class="checkbox-02 margin-bottom-30">
                                                        <a href="#" class="forget-pass">Forgot Password?</a>
                                                    </div>
                                                    <div class="form-btn">
                                                        <button class="submit-btn" type="submit" name="submit">Login</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-3"></div>
                    </div>
                </div>
			</section>
			
		</div>
    </div>

        <?php
                include_once("footer1.php")
            ?>
            
		

		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<!-- bootstrap -->
		<script src="js/bootstrap.min.js"></script>
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

<!-- Mirrored from kodeforest.net/html/bon-voyage/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Aug 2019 15:56:49 GMT -->
</html>


