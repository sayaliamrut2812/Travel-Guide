
<?php
//include_once("config.php");
if(isset($_POST['submit']))
{

    $dbHost='localhost';
    $dbUser='root';
    $dbPassword='';
    $dbName='Travel';

//create connection

    $conn=mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);
//check connection

if (!$conn) 
{
    die("connection failed: ".mysqli_connect_error());
}

$uname=$_POST['uname'];
$email=$_POST['email'];
$password=$_POST['pass'];
$cpass=$_POST['cpass'];
$phone=$_POST['phone'];

$query="insert into tbl_registration(reg_name,reg_contact,reg_email,reg_password,reg_confirm_pass,reg_city,reg_zipcode,reg_state,reg_age,reg_address,reg_image)values('$uname','$phone','$email','$password','$cpass','NULL','NULL','NULL','NULL','NULL','NULL')";
$run=mysqli_query($conn,$query);

if($run){

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
	
<!-- Mirrored from kodeforest.net/html/bon-voyage/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Aug 2019 15:56:49 GMT -->
<head>
    <?php
    include_once("css_file.php");
     ?>
    <style type="text/css">
    body, html 
    {
        height: 100%;
        margin: 0;
    }
        
.bg {
  /* The image used */
  background-image: url("images/signimage.jpeg");

  /* Full height */
  height: 150%; 
 /* background: rgba(200, 54, 54, 0.5);
  /* Center and scale the image nicely 
  background-position: center;*/
  background-repeat: no-repeat;
  background-size: cover;
}
    </style>    

		</head>
	<body >
        <div class="bg" >
        
        <?php
                include_once("header.php")
            ?>
        
		<!--<div class="wrapper" >-->
            
					<div class="container" style="margin-top: 40px;">
						<div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="form-04">
                                    <form method="POST" action="register.php">
                                        <div class="login-form">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="travel-login">
                                                        <h4 class="title-01">register</h4>
                                                        <h5 class="title-anchor">i am already member.<a href="login.php">Login!</a></h5>
                                                        <div class="text-felid label-effect margin-bottom-30">
                                                            <span><i class="fa fa-user-o" aria-hidden="true"></i></span>
                                                            <div class="kf_felids">
                                                                <input class="ipd" type="text" data-new-placeholder="Your name" placeholder="Your name" name="uname">
                                                            </div>
                                                        </div>
                                                        <div class="text-felid label-effect margin-bottom-30">
                                                            <span><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                                                            <div class="kf_felids">
                                                                <input class="ipd" type="email" data-new-placeholder="Your Email" placeholder="Your Email" name="email">
                                                            </div>
                                                        </div>
                                                        <div class="text-felid label-effect margin-bottom-30">
                                                            <span><i class="fa fa-key" aria-hidden="true"></i></span>
                                                            <div class="kf_felids">
                                                                <input class="ipd" type="password" data-new-placeholder="Your Passowrd" placeholder="Your Passowrd" name="pass">
                                                            </div>
                                                        </div>
                                                        <div class="text-felid label-effect margin-bottom-30">
                                                            <span><i class="fa fa-key" aria-hidden="true"></i></span>
                                                            <div class="kf_felids">
                                                                <input class="ipd" type="password" data-new-placeholder="Re-Passowrd" placeholder="Re-Passowrd" name="cpass">
                                                            </div>
                                                        </div>
                                                        <div class="text-felid label-effect margin-bottom-30">
                                                            <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                                                            <div class="kf_felids">
                                                                <input class="ipd" type="text" data-new-placeholder="Your Phone Number" placeholder="Your Phone Number" name="phone" maxlength="10">
                                                            </div>
                                                        </div>
                                                        <div class="form-btn">
                                                            <button class="submit-btn" type="submit" name="submit">register</button>
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
		<!-- jquery.ripples-min -->
		<script src="js/jquery.ripples-min.js"></script>
		<!-- prettyphoto -->
		<script src="js/prettyphoto/prettyphoto.js"></script>
		<!-- Responsive SCRIPTS -->
      	<script src="js/responsive-menu/responsive.jquery.js"></script>
		<!-- custom -->
		<script src="js/custom.js"></script>
        
	</body>

<!-- Mirrored from kodeforest.net/html/bon-voyage/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Aug 2019 15:56:49 GMT -->
</html>



