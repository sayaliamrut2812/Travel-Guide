<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kodeforest.net/html/bon-voyage/blog-post-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Aug 2019 16:00:26 GMT -->
<head>

	<?php
			//header
			include_once("header.php");
		?>
    
    <?php
    	include_once("css_file.php");
    ?>

    <?php
    	include_once("config.php");
        $id=$_GET['id'];
    ?>
</head>

<body>
		

        <!--Travel Banner-->
        <div class="kode_banner">
            <!--Sub banner for inner pages-->
            <div class="sub-banner">
                <div class="container">
                    <h2>ShopPing</h2>
                    
                </div>
            </div>
            
        </div>
        <!--Travel Banner ends-->

        <div class="content">
            <!--Travel Blog Detail Content-->
            <section>
                <div class="container">
               
                        </div>
                        <!--Travel Blog Detail column-->
                        <div class="col-md-8" style="margin-left: 100px;" >
                              <div class="row">
                        	<?php
							$query="SELECT * FROM tbl_shopping where shop_id=$id";
							$result=mysqli_query($conn,$query);
							if($result->num_rows!=0)
							{
								while($row=$result->fetch_array())
								{
                                    $shop_id=$row['shop_id'];
									$shopname=$row['shop_name'];
									$shopdesc=$row['shop_desc'];
								    $shopimg=$row['shop_image'];
								    $shopadd=$row['shop_address'];
								    $shoptime=$row['shop_timings'];


						?>
                          
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="kf_post_2 kf_post">
                                        <div class="zoom-picture1 height-239">
                                            <img src="<?php echo $shopimg; ?>" alt="blog img" style="height:200px; ">
                                        </div>
                                        <div class="kf_post_content">
                                          <a href="city_shopping_details.php?id=<?php echo $shop_id; ?>">   <h6><?php echo $shopname; ?></h6>
                                            <ul class="meta_tag">
                                                <li><span class="fa fa-calendar"></span><a href="#"><?php echo $shoptime; ?></a></li>
                                                <!--<li><span class="fa fa-tags"></span><a href="#"><?php //echo $shoptime; ?></a></li>-->
                                            </ul>
                                           <p><?php echo $shopadd; ?></p>
                                        </div>
                                       <!-- <div class="kf_post_footer">
                                            <ul class="meta_tag">
                                                <li><span class="fa fa-user"></span><a href="#">By Josaon Smith</a></li>
                                                <li class="pull-right"><span class="fa fa-comments"></span><a href="#">21 Comments</a></li>
                                            </ul>
                                        </div>-->
                                    </div>
                                </div>
                             
                             <?php
									}
								}
								?>
                          </div>             
                          </div>

                       </div>
                   </div>
               </section>
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
<?php

include_once("footer.php");
?>
</body>


<!-- Mirrored from kodeforest.net/html/bon-voyage/blog-post-sidebar.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Aug 2019 16:00:31 GMT -->
</html>