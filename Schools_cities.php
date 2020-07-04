<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from kodeforest.net/html/bon-voyage/destinations-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Aug 2019 15:56:51 GMT -->
<head>
	<?php
		include_once("header.php");
		?>
</head>
<?php
		//header
		include_once("config.php");
		$city_id=$_GET['id'];
?>


	<body>
			
			<!--Travel Banner-->
			<div class="kode_banner">
				<!--Sub banner for inner pages-->
				<div class="sub-banner">
					<?php
							$query="SELECT * FROM tbl_city where city_id=$city_id";
							$result=mysqli_query($conn,$query);
							if($result->num_rows!=0)
							{
								while($row=$result->fetch_array())
								{
									
								    $city_name=$row['city_name'];
						?>
					<div class="container">
						<h2>Schools & Colleges in <?php echo $city_name ; ?></h2>
					</div>
					<?php
									}
								}
					?>
				</div>
				
			</div>
			<!--Travel Banner ends-->
			<div class="content" >
				<!--Travel Blog Detail Content-->
				<section>
					<div class="container">
						<div class="top-row margin-bottom-30">
							
							
						</div>
						<div class="destination-blog-01">
							<div class="row">
								<?php
							$query="SELECT * FROM tbl_college where city_id=$city_id";
							$result=mysqli_query($conn,$query);
							if($result->num_rows!=0)
							{
								while($row=$result->fetch_array())
								{
									$id=$row['s_id'];
									$sname=$row['s_name'];
									$sdesc=$row['s_desc'];
								    $simg=$row['s_image'];

						?>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="destination-grid">
										<img src="<?php echo $simg; ?>" alt="img here" style="height: 300px; width: 500px;">
										<div class="destination-grid-content">
											<h5><a href="#"><?php echo $sname; ?></a></h5>
											<br><br><br><br>
											<a href="School_details.php?id=<?php echo $id;?>" class="arrow-btn">See More</a>
										</div>
									</div>
								</div>
								<?php
									}
								}
								?>
								<div class="pagination">
									<a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
									<a href="#" class="active">1</a>
									<a href="#">2</a>
									<a href="#">3</a>
									<a href="#">4</a>
									<a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>

<?php
	include_once("footer.php");
?>

		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<script src="js/modernizr.custom.js"></script>
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

<!-- Mirrored from kodeforest.net/html/bon-voyage/destinations-02.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Aug 2019 15:57:16 GMT -->
</html>

