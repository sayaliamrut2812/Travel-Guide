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
                    <h2>Schools/Colleges</h2>
                    
                </div>
            </div>
            
        </div>
        <!--Travel Banner ends-->

        <div class="content">
            <!--Travel Blog Detail Content-->
            <section>
                <div class="container">
                    <div class="row">
                    <!--	<div class="col-md-4">          
 							<!--Travel Blog Detail widget category -->
                            <div class="widget widget-category">
                                <!--Travel heading-->
                             <!--   <div class="heading text-align-left">
                                    <h5 class="title-style-1">Category</h5>
                                </div>

                                <ul class="category">
                                    <li><a href="#">MUMBAI</a></li>
                                    <li><a href="#">PUNE</a></li>
                                    <li><a href="#">NASHIK</a></li>
                                    <li><a href="#">KOLHAPUR</a></li>
                                    <li><a href="#">AURANGABAD</a></li>
                                    <li><a href="#">MAHABALESHWAR</a></li>
                                    <li><a href="#">NAGPUR</a></li>
                                    
                                </ul>-->
                            <!--</div>  
                        </div>-->
                        <!--Travel Blog Detail column-->
                        <div class="col-md-8">
                              <div class="row">
                        	<?php
							$query="SELECT * FROM tbl_college where city_id=$id";
							$result=mysqli_query($conn,$query);
							if($result->num_rows!=0)
							{
								while($row=$result->fetch_array())
								{
                                    $s_id=$row['s_id'];
									$sname=$row['s_name'];
                                    $sadd=$row['s_address'];
                                    $simg=$row['s_image'];
                                    $scont=$row['s_contact'];


						?>
                          
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="kf_post_2 kf_post">
                                        <div class="zoom-picture1 height-239">
                                            <img src="<?php echo $simg; ?>" alt="blog img" style="height:200px;" >
                                        </div>
                                        <div class="kf_post_content">
                                         <a href="city_school_details.php?id=<?php echo $s_id; ?>">    <h6><?php echo $sname; ?></h6>
                                            <ul class="meta_tag">
                                                <li><span class="fa fa-calendar"></span><a href="#"><?php echo $scont; ?></a></li>
                                                <!--<li><span class="fa fa-tags"></span><a href="#"><?php //echo $shoptime; ?></a></li>-->
                                            </ul>
                                           <p><?php echo $sadd; ?></p></a>
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