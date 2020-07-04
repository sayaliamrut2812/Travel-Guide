<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from kodeforest.net/html/bon-voyage/destinations-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Aug 2019 15:57:36 GMT -->
<head>
	<?php
		include_once("css_file.php");
	?>	

			</head>
	<body >
		<?php
		//header
			include_once("header.php");
			include_once("config.php");

			  $id=$_GET['id'];            
                        
		?>

			<!--Header starts version.1 ends-->
		<?php		
            $query = "SELECT * FROM tbl_city Where city_id=$id ";  
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
                        $city_about_us=$row['city_about_us'];
                      	$city_history=$row['city_history'];
                        
                      ?>

			<!--Travel Banner-->
			<div class="kode_banner">
				<!--Sub banner for inner pages-->
				<div class="kode_destination_banner overlay-30" style="background-image: url(<?php echo $city_image ?>);  ">
					<!--div class="weather">paris,us</div-->
					<div class="container">
					<!--	<div class="tour-trip-visit">
							<img src="extra-images/paris-img.jpg" alt="img here">
							<div class="play-tour">
								<a href="#" class="radio-btn orange-bg"><i class="fa fa-play" aria-hidden="true"></i></a>
							</div>
						</div>-->
				
						<div class="kode_tour_caption">
							<span>Explore</span>
							<h2 style="font-size: 65px;"><?php echo $city_name; ?></h2>
							<div class="kode_tour_weather">
								<div id="weather"></div>
								<div id="live-date"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php }}?>
			<!--Travel Banner ends-->
			<div class="content" >
				<div class="kode_portfolio_info">
					<div class="sticky_nav_menu" id="mainNav">
						<div class="container">
							<ul class="kode_navi_fixed nav">
								<li class="active">
									<a class="js-scroll-trigger nav-icon" href="#scroll1">
									<i class="icon-opera"></i>
									<span>About</span>
									</a>
								</li>
								<li>
									<a class="js-scroll-trigger nav-icon" href="#scroll2">
									<i class="icon-man"></i>
									<span>History</span>
									</a>
								</li>
							<!--	<li>
									<a class="js-scroll-trigger nav-icon" href="#scroll4">
									<i class="icon-travel-7"></i>
									<span>Must Know Facts</span>
									</a>
								</li>-->
								
								<li>
									<a class="js-scroll-trigger nav-icon" href="#scroll3">
									<i class="icon-social-1"></i>
									<span>Thing To Do</span>
									</a>
								</li>
							<!--	<li>
									<a class="js-scroll-trigger nav-icon" href="#scroll6">
									<i class="icon-emoticon"></i>
									<span>Places to visit</span>
									</a>
								</li>-->
								<li>
									<a class="js-scroll-trigger nav-icon" href="#scroll5">
									<i class="icon-medical"></i>
									<span>Gallery</span>
									</a>
								</li>
								
								
							</ul>
						</div>
					</div>
					<section class="kf_culture_section" id="scroll1">
						<div class="container">
							<!--Travel heading-->
							<div class="heading text-align-center">
												<?php		
            $query = "SELECT * FROM tbl_city Where city_id=$id ";  
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
                        $city_about_us=$row['city_about_us'];
                      	$city_history=$row['city_history'];
                        
                      ?>


								<span>About <?php echo $city_name; ?></span>
								<h2 style="font-size: ">Welcome To <?php echo $city_name; ?></h2>
							</div>
							<div class="kf_culture_blog">
								<div class="kf_culture_content">
									<h2>Extraordinary<br>Experience in <?php echo $city_name; ?><br></h2>
									<p><?php echo $city_about_us ?></p>
								<!--	<a href="#" class="btn-normal-1 effect2-color-1">See All Tour</a>-->
								</div>
								<div class="kf_culture_pictures">
									<figure>
										<div class="thumb1">
											<img src="images/mumbai/hajiali-1.jpg" alt="image here">
										</div>
										<div class="thumb2">
											<img src="images/mumbai/bandra1.jpg" alt="image here">
										</div>
									</figure>
								</div>
							</div>
						</div>
					</section>
					<section class="history-blog" id="scroll2">
						<div class="container">
							<div class="kode_history_blog">
								<div id="jp_container_1" role="application" aria-label="media player">
									<div class=""><img src="images/mumbai/bandra1.jpg" ></div>
								<!--	<div class="play-pause-btn">
										<button class="jp-play" ><i class="fa fa-play" aria-hidden="true"></i></button>
									</div>-->
								</div>
							</div> 
							<div class="kode_history_content">
								<div class="heading text-align-left">
									<span><?php echo $city_name; ?></span>
									<h2>History of <?php echo $city_name; ?></h2>
								</div>
								<div class="kode-accordian-blog">
									<div class="accordian-title accordion" id="section1">
										<h5>Early Settlement</h5>
									</div>
									<div class="accordian-content">
										<p><?php echo $city_history=$row['city_history'];
                         ?></p>
									</div>
									
								</div>
							</div>
						</div>
					</section>
					
					<section class="padding-adjust" id="scroll3">
						<div class="blog-content-area">
							<!--Travel heading-->
							<div class="heading text-align-center margin-40-adjust">
								<span></span>
								<h2>Things To Do in <?php echo $city_name; ?></h2>
							</div>
							<div class="five-blog-slider" >
							<div >
									<div class="blog_elements" style="width: 260px;" >
										<img src="extra-images/paris-blog-img01.jpg" alt="img here">
										<div class="five_blog_content">
											<h5 class="border-line-style"><a href="hotel_desc.php?id=<?php echo $city_id; ?>">Hotels/Restaurants </a></h5>
											<p>Explore various Hotels and Restaurants</p>
										</div>
									</div>
									<div class="blog_elements" style="width: 260px;">
										<img src="extra-images/paris-blog-img02.jpg" alt="img here">
										<div class="five_blog_content">
										<a href="college_desc.php?id=<?php echo $city_id; ?>">	<h5 class="border-line-style">School/Colleges</h5>
											<p>Explore various Schools and Colleges </p></a>
										</div>
									</div>
									<div class="blog_elements" style="width: 260px;">
										<img src="extra-images/paris-blog-img03.jpg" alt="img here">
										<div class="five_blog_content">
										<a href="attraction_desc.php?id=<?php echo $city_id; ?>">	<h5 class="border-line-style">Places Of Attraction</h5>
											<p>Explore various Places of Attractions</p></a>
										</div>
									</div>
									<div class="blog_elements" style="width: 260px;">
										<img src="extra-images/paris-blog-img04.jpg" alt="img here">
										<div class="five_blog_content">
										<a href="hospital_desc.php?id=<?php echo $city_id; ?>">	<h5 class="border-line-style">	<h5 class="border-line-style">Hospitals</h5></a>
											<p>Explore various Hospitals </p>
										</div>
									</div>
									<div class="blog_elements" style="width: 260px;">
										<img src="extra-images/paris-blog-img02.jpg" alt="img here">
										<div class="five_blog_content">
										<a href="shopping_new.php?id=<?php echo $city_id; ?>">	<h5 class="border-line-style">	<h5 class="border-line-style">Shopping</h5>
											<p>Explore various Shopping places in city  </p></a>
										</div>
									</div>
								<!--	<div class="blog_elements">
										<img src="extra-images/paris-blog-img03.jpg" alt="img here">
										<div class="five_blog_content">
											<h5 class="border-line-style">Trip & Tour</h5>
											<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus </p>
										</div>
									</div>
									<div class="blog_elements">
										<img src="extra-images/paris-blog-img04.jpg" alt="img here">
										<div class="five_blog_content">
											<h5 class="border-line-style">Where to stay</h5>
											<p>Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus </p>
										</div>
									</div>  -->
								</div>
							</div>
						</div>
					</section>
				
					<section class="travel-attraction-place" id="scroll5">
						<div class="container">
							<div class="heading text-align-center white-color">
								<span>Destination</span>
								<h2>Top Attraction in <?php echo $city_name; ?></h2>
							</div>
							<div class="travel-slider-items">
								<?php
                    }
                }
			?>

								<?php

			//include_once("config.php");

            $query = "SELECT * FROM tbl_gallery Where city_id=$id ";  
                $result = mysqli_query($conn,$query);
                if($result->num_rows!=0)
                {  
                    while($row=$result->fetch_array())  
                    {
                        $city_id=$row['city_id'];
                        $city_image=$row['city_image'];
                        
                      ?>

								<div class="travel_attraction_content">
									<img src="<?php echo $city_image;?>" alt="img here" height="500 px;">
									<div class="travel_attraction_footer">
										<h4>Mumbai</h4>
										<p></p>
									</div>
								</div>

								<?php
                    }
                }

?>

						
							</div>

							
		


							<div class="travel-slider-items-nav">

<?php

			//include_once("config.php");

            $query = "SELECT * FROM tbl_gallery Where city_id=$id";  
                $result = mysqli_query($conn,$query);
                if($result->num_rows!=0)
                {  
                    while($row=$result->fetch_array())  
                    {
                        $city_id=$row['city_id'];
                        $city_image=$row['city_image'];
                        
                      ?>



								<div class="item-showcase">
									<img src="<?php echo $city_image;?>" alt="img here" height="120 px;" width="80 px;">
								</div>
							<!--	<div class="item-showcase">
									<img src="extra-images/thumbnail-img02.jpg" alt="img here">
								</div>
								<div class="item-showcase">
									<img src="extra-images/thumbnail-img03.jpg" alt="img here">
								</div>
								<div class="item-showcase">
									<img src="extra-images/thumbnail-img04.jpg" alt="img here">
								</div>
								<div class="item-showcase">
									<img src="extra-images/thumbnail-img05.jpg" alt="img here">
								</div>-->
								<?php
                    }
                }

?>
							</div>
						</div>
					</section>
					<section class="travel_country_history" id="scroll6">
						<div class="container">
							<div class="row">
								<div class="col-md-8">
								<!--	<div class="travel_country_content">
										<div class="heading text-align-left">
											<span>Paris</span>
											<h2>Good To Know</h2>
										</div>-->
								<!--		<div class="table-blog">
											<ul class="country-info">
												<li>
													<h6><strong>Country</strong></h6>
													<h6 class="info-title">France</h6>
												</li>
												<li>
													<h6><strong>Visa Requirements</strong></h6>
													<h6 class="info-title">Visa in not needed for EU. Everyone else needs a visa.</h6>
												</li>
												<li>
													<h6><strong>Languages spoken</strong></h6>
													<h6 class="info-title">French, English</h6>
												</li>
												<li>
													<h6><strong>Currency used</strong></h6>
													<h6 class="info-title">Euro</h6>
												</li>
												<li>
													<h6><strong>Area (km2)</strong></h6>
													<h6 class="info-title">359.96 km2</h6>
												</li>
											</ul>
										</div> -->
									</div>
								</div>
								<div class="col-md-4">
									</div>
								</div>
							</div>
						</div>
					</section><!--Travel Top Reviews-->
				<section class="light-bg">
					<div class="container">
						<!--Travel heading-->
						<div class="heading text-align-center">
							<span>What people say about us</span>
							<h2>Top Reveiws</h2>
						</div>
						<div class="kf_testimonial">

							<?php
								$query="SELECT * FROM tbl_feedback where feed_id<5";
								$result=mysqli_query($conn,$query);
								if($result->num_rows!=0)
								{
									while($row=$result->fetch_array())
										{
										$feedback=$row['feedback'];
							?>

							<div class="kf_slide_items">
								<div class="testimonial-items">
									<p class="qoute"><?php echo $feedback;?></p>
									<span class="rateing-starts"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
								</div>
								<div class="user-content">
									<figure>
										<img src="extra-images/testimonial-img1.png" alt="">
									</figure>
									<div class="kf-user-caption">
										<span>Joly Gen</span>
										<small>Traveller</small>
									</div>
								</div>
							</div>
							<?php
						}}
						?>

							
					</div>
				</section>
				<!--Travel Top Reveiws ends-->
				<!--Travel summer offers-->
				<section class="kf_summer_offers overlay-blue">
					<div class="container">
						<div class="summer_offer_show tilt" data-tilt>
						    <h2>
							WORK<br>
							TRAVEL<br>
							 SAVE <br>
							  REPEAT<br>
							  </h2>
						</div>
						<div class="kf_summer_picture">
							<img  src="extra-images/summer-vacaton-img.png" alt="">
						</div>
					</div>
				</section>
				<!--Travel summer offers ends-->
					<section>
					<!--	<div class="container">
							<!--Travel heading-->
					<!--		<div class="heading text-align-center">
								<span>MEET INTERESTING PEOPLE</span>
								<h2>Related News post</h2>
							</div>
							<div class="kf_ralated_posts">
								<div class="row">
									<div class="col-md-4 col-sm-6 col-xs-12">
										<div class="kf_post_2 kf_post">
											<div class="zoom-picture1 height-239">
												<img src="extra-images/rala-post-img1.jpg" alt="blog img">
											</div>
											<div class="kf_post_content">
												<h4><a href="#">Etiquette Tips for Travellers</a></h4>
												<ul class="meta_tag">
													<li><span class="fa fa-calendar"></span><a href="#">24 Feb 2018</a></li>
													<li><span class="fa fa-tags"></span><a href="#">Posted by traveller</a></li>
												</ul>
												<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,</p>
											</div>
											<div class="kf_post_footer">
												<ul class="meta_tag">
													<li><span class="fa fa-user"></span><a href="#">By Josaon Smith</a></li>
													<li class="pull-right"><span class="fa fa-comments"></span><a href="#">21 Comments</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 col-xs-12">
										<div class="kf_post kf_post_2">
											<div class="zoom-picture1 height-239">
												<img src="extra-images/rala-post-img2.jpg" alt="blog img">
											</div>
											<div class="kf_post_content">
												<h4><a href="#">Etiquette Tips for Travellers</a></h4>
												<ul class="meta_tag">
													<li><span class="fa fa-calendar"></span><a href="#">24 Feb 2018</a></li>
													<li><span class="fa fa-tags"></span><a href="#">Posted by traveller</a></li>
												</ul>
												<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,</p>
											</div>
											<div class="kf_post_footer">
												<ul class="meta_tag">
													<li><span class="fa fa-user"></span><a href="#">By Josaon Smith</a></li>
													<li class="pull-right"><span class="fa fa-comments"></span><a href="#">21 Comments</a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="col-md-4 col-sm-6 col-xs-12">
										<div class="kf_post kf_post_2">
											<div class="zoom-picture1 height-239">
												<img src="extra-images/rala-post-img3.jpg" alt="blog img">
											</div>
											<div class="kf_post_content">
												<h4><a href="#">Etiquette Tips for Travellers</a></h4>
												<ul class="meta_tag">
													<li><span class="fa fa-calendar"></span><a href="#">24 Feb 2018</a></li>
													<li><span class="fa fa-tags"></span><a href="#">Posted by traveller</a></li>
												</ul>
												<p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,</p>
											</div>
											<div class="kf_post_footer">
												<ul class="meta_tag">
													<li><span class="fa fa-user"></span><a href="#">By Josaon Smith</a></li>
													<li class="pull-right"><span class="fa fa-comments"></span><a href="#">21 Comments</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> -->
				</section> 
				</div>
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
		<!-- location-finder -->
		<script src="http://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;libraries=places&amp;key=AIzaSyDKVhf9e-mQfRtt_Zp2iG4ckYXKcuP25Ic"></script>
		<script src="js/map-pins.js"></script>
		<!-- rateing-stars -->
		<script src="js/rateing-stars.js"></script>
		<!-- WEATHER SCRIPTS -->
		<script src="js/weather.js"></script>
		<!-- videoplayer -->
		<script src="js/videoplay/jplayer.min.js"></script>
		<!-- accordian -->
		<script src="js/accordian.js"></script>
		<!-- scrolling-nav -->
		<script src="js/scrolling-nav.js"></script>
		<script src="js/jquery.easing.min.js"></script>
		<!-- tilt.jquery.min -->
		<script src="js/tilt.jquery.min.js"></script>
		<!-- jquery.zoom.min -->
		<script src="js/jquery.zoom.min.js"></script>
		<!-- jquery.ripples-min -->
		<script src="js/jquery.ripples-min.js"></script>
		<!-- prettyphoto -->
		<script src="js/prettyphoto/prettyphoto.js"></script>
		<!-- Responsive SCRIPTS -->
      	<script src="js/responsive-menu/responsive.jquery.js"></script>
		<!-- custom -->
		<script src="js/custom.js"></script>
	</body>

<!-- Mirrored from kodeforest.net/html/bon-voyage/destinations-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Aug 2019 15:58:36 GMT -->
</html>

