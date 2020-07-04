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
    ?>
</head>

<body>
		

        <!--Travel Banner-->
        <div class="kode_banner">
            <!--Sub banner for inner pages-->
            <div class="sub-banner">
                <div class="container">
                    <h2>Hospitals</h2>
                    
                </div>
            </div>
            
        </div>
        <!--Travel Banner ends-->

        <div class="content">
            <!--Travel Blog Detail Content-->
            <section>
                <div class="container">
                    <div class="row">
                    	<div class="col-md-4">          
 							<!--Travel Blog Detail widget category -->
                            <div class="widget widget-category">
                                <!--Travel heading-->
                                <div class="heading text-align-left">
                                    <h5 class="title-style-1">Category</h5>
                                </div>

                                <ul class="category">
                                    <?php

            include_once("config.php");

            $query = "SELECT * FROM tbl_city ";  
                $result = mysqli_query($conn,$query);
                if($result->num_rows!=0)
                {  
                    while($row=$result->fetch_array())  
                    {
                        $city_id=$row['city_id'];
                         $city_name=$row['city_name'];
                       
             ?>

                                         <li><a href="Hospitals_cities.php?id=<?php echo $city_id; ?>"><?php echo $city_name; ?></a></li>
                                       <?php
                    }
                }
?>
                                </ul>
                            </div>  
                        </div>
                        <!--Travel Blog Detail column-->
                        <div class="col-md-8">
                              <div class="row">
                        	<?php
							$query="SELECT * FROM tbl_hospital";
							$result=mysqli_query($conn,$query);
							if($result->num_rows!=0)
							{
								while($row=$result->fetch_array())
								{
                                    $id=$row['h_id'];
									$hname=$row['h_name'];
                                    $hadd=$row['h_address'];
                                    $himg=$row['h_image'];
                                    $htime=$row['h_timings'];



						?>
                          
                                <div class="col-md-4 col-sm-6 col-xs-12">
                                    <div class="kf_post_2 kf_post">
                                        <div class="zoom-picture1 height-239">
                                            <img src="<?php echo $himg; ?>" alt="blog img" style="height:200px; ">
                                        </div>
                                        <div class="kf_post_content">
                                            <h6><?php echo $hname; ?></h6>
                                            <ul class="meta_tag">
                                                <li><span class="fa fa-calendar"></span><a href="#"><?php echo $htime; ?></a></li>
                                            </ul>
                                           <p><?php echo $hadd; ?></p>
                                           <a class="btn-normal-1 " href="Hospital_details.php?id=<?php echo $id;?>" style="margin-left: 40px; margin-top: 20px;  background-color:orange;">SEE MORE</a>
                                        </div>
                                       
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