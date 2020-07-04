<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from kodeforest.net/html/bon-voyage/destinations.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Aug 2019 15:56:49 GMT -->
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

			<!--Header starts version.1 ends-->
			<!--Travel Banner-->
			<div class="kode_banner">
				<!--Sub banner for inner pages-->
				<div class="sub-banner">
					<div class="container">
						<h2>destinations</h2>
						<p></p>
					</div>
				</div>
				<div class="breadcrumb-blog">
					<ul class="breadcrumb orange-bg">
						<li><a href="#">destinations</a></li>
					<!--	<li class="active"><a href="#">destinations grid</a></li> -->
					</ul>
				</div>
			</div>
			<!--Travel Banner ends-->
			<div class="content" >
				<!--Travel Blog Detail Content-->
				<section>
					<div class="container">
						<div class="top-row margin-bottom-30">
							<div class="page-info">
								<!--<p>Showing 1 to 6 of 200 Total</p>-->
							</div>
							<div class="pull-right">
								<div class="dropdown-select-01">
									<!--<select class="select">
										<option>sort by: Name</option>
										<option>sort by: Name</option>
										<option>sort by: Name</option>
									</select>-->
								</div>
								<div class="dropdown-select-01">
								<!--	<select class="select">
										<option>show:9</option>
									</select>-->
								</div>
								<ul class="tab-nav-row">
								<!--	<li><a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-th-list" aria-hidden="true"></i></a></li>
								--></ul>
							</div>
						</div>





			<div class="blog-tour-grid full-slider">
							<div class="row">
						

			<?php

			include_once("config.php");

            $query = "SELECT * FROM tbl_city ";  
                $result = mysqli_query($conn,$query);
                if($result->num_rows!=0)
                {  
                    while($row=$result->fetch_array())  
                    {
                        $city_id=$row['city_id'];
                        $state_id=$row['state_id'];
                        $city_name=$row['city_name'];
                        $city_image=$row['city_image'];
                        $city_desc=$row['city_desc'];
                  ?>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="slide">
										<div class=" default-img" style="background-image: url(<?php echo $row['city_image'];?>" alt="ghi"">
											
					                        <div class="slide-content">
					                            <span class="icon-beach-1"></span>
					                            <h5 style="color: white;"><?php echo $city_name;?></h5>
					                            <p><?php echo $city_desc;?></p>
					                            <a href="destinations-detail.php?id=<?php echo $city_id; ?>" class="arrow-btn">Explore</a>
					                        </div>
					                    </div>
									</div>
								</div>


						<?php
                    }
                }
			?>
								<!--
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="slide">
										<div class="image-06 default-img">
					                        <div class="slide-content">
					                            <span class="icon-monument-1"></span>
					                            <h5><a href="#">Travel Usa</a></h5>
					                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</p>
					                            <a href="#" class="arrow-btn">Book Now</a>
					                        </div>
					                    </div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="slide">
										<div class="image-07 default-img">
					                        <div class="slide-content">
					                            <span class="icon-monuments"></span>
					                            <h5><a href="#">Travel London</a></h5>
					                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</p>
					                            <a href="#" class="arrow-btn">Book Now</a>
					                        </div>
					                    </div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="slide">
										<div class="image-08 default-img">
					                        <div class="slide-content">
					                            <span class="icon-monuments-1"></span>
					                            <h5><a href="#">Travel India</a></h5>
					                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</p>
					                            <a href="#" class="arrow-btn">Book Now</a>
					                        </div>
					                    </div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="slide">
										<div class="image-09 default-img">
					                        <div class="slide-content">
					                            <span class="icon-building"></span>
					                            <h5><a href="#">Travel australia</a></h5>
					                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</p>
					                            <a href="#" class="arrow-btn">Book Now</a>
					                        </div>
					                    </div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="slide">
										<div class="image-10 default-img">
					                        <div class="slide-content">
					                            <span class="icon-building-1"></span>
					                            <h5><a href="#">Travel dubai</a></h5>
					                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</p>
					                            <a href="#" class="arrow-btn">Book Now</a>
					                        </div>
					                    </div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="slide">
										<div class="image-11 default-img">
					                        <div class="slide-content">
					                            <span class="icon-building-2"></span>
					                            <h5><a href="#">Travel china</a></h5>
					                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</p>
					                            <a href="#" class="arrow-btn">Book Now</a>
					                        </div>
					                    </div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-xs-12">
									<div class="slide">
										<div class="image-12 default-img">
					                        <div class="slide-content">
					                            <span class="icon-monument-2"></span>
					                            <h5><a href="#">Travel thailand</a></h5>
					                            <p>This is Photoshop's version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin.</p>
					                            <a href="#" class="arrow-btn">Book Now</a>
					                        </div>
					                    </div>
									</div>
								</div>-->
								<div class="pagination">
								<!--	<a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
									<a href="#" class="active">1</a>
									<a href="#">2</a>
									<a href="#">3</a>
									<a href="#">4</a>
									<a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a>-->
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		
			<?php
				include_once("footer.php")
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
		<!-- jquery.ripples-min -->
		<script src="js/jquery.ripples-min.js"></script>
		<!-- prettyphoto -->
		<script src="js/prettyphoto/prettyphoto.js"></script>
		<!-- Responsive SCRIPTS -->
      	<script src="js/responsive-menu/responsive.jquery.js"></script>
		<!-- custom -->
		<script src="js/custom.js"></script>
	</body>

<!-- Mirrored from kodeforest.net/html/bon-voyage/destinations.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Aug 2019 15:56:51 GMT -->
</html>

