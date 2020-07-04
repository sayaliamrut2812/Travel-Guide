
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

$uname=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$subject=$_POST['subject'];
$details=$_POST['details'];

$query="insert into tbl_enquiry(enq_name,enq_contact,enq_email,enq_subject,enq_details)values('$uname','$contact','$email','$subject','$details')";
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
 	
	<head>
		<?php
			include_once("css_file.php");
		?>
	</head>

	<body>
		<?php
			include_once("header.php");
		?>

		<div class="wrapper" >
			<!--Travel Banner-->
			<div class="kode_banner">
				<!--Sub banner for inner pages-->
				<div class="sub-banner">
					<div class="container">
						<h2>Contact us</h2>
						<p>We are here to help and answer any Question you might have.
						<br>we look forward to hear from you.
						</p>
					</div>
				</div>
				<div class="breadcrumb-blog">
					<ul class="breadcrumb orange-bg">
						<li><a href="index.php">Home</a></li>
						<li class="active"><a href="">contact us</a></li>
					</ul>
				</div>
			</div>
			<!--Travel Banner ends-->
			<div class="content" >
				<!--Travel contact us Content-->
				<section>
					<div class="container">
						<!--Travel heading-->
							<div class="heading text-align-center">
							<h2>KEEP IN TOUCH</h2>
							<span>Always there to hear you</span>
						</div>
						<div class="services-blog-choose">
							<div class="row">
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="travel-choose-us">
										<span class="fa fa-phone"></span>
										<h5>Phone Number</h5>
										<p>8999605531
										<br>7684905416
										<br>9075247676
										</p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="travel-choose-us">
                                        <span class="fa fa-envelope-open-o"></span>
										<h5>Email Address</h5>
										<p>info@travel.com
										<br>Support@travel.com
										</p>
									</div>
								</div>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="travel-choose-us">
										<span class="icon-signs"></span>
										<h5><a href="#">Locations</a></h5>
										<p>MIT-WPU,
										<br>Kothrud, Pune
										<br>Maharastra.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<div class="kf_location_review">
					<form method="POST" action="contact-us.php">
						<div id="map-general"></div>
						<div class="kf_absolute_review form-box">
							<div class="container">
								<div class="heading text-align-center">
									<h2>Have Some Questions?</h2>
									<span>Our team feels happy to answer your question</span>
								</div>
								<div class="row">
									<div class="col-md-5">
										<div class="text-felid">
											<input type="text" placeholder="Name" name="name">
										</div>
										<div class="text-felid">
											<input type="text" placeholder="Email" name="email">
										</div>
										<div class="text-felid">
											<input type="text" placeholder="Phone Number" name="contact">
										</div>
									</div>
									<div class="col-md-7">
										<div class="text-felid">
											<input type="text" placeholder="Subject" name="subject">
										</div>
										<div class="text-area">
											<textarea placeholder="Comments" name="details"></textarea>
										</div>
										<div class="submit-btn">
											<button class=" btn-normal-1 blue-bg" name="submit">Send Message</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			
			<?php
				//footer
				include_once("footer.php")
			?>
		</div>

		<?php
			include_once("js_file.php")
		?>
	</body>

</html>

