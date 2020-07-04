<?php include_once("config.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Header</title>
	<?php
		include_once("css_file.php");
	?>
</head>
<body>
<div class="pre-loader">
			<div class="pre-loader-img"></div>
		</div>
		<button id="top-btn"><i class="fa fa-angle-up" data-toggle="tooltip" title="click"></i></button>
        <i class='search-icon-close fa fa-times'></i>
        <div class='form-search-popup container'>
            <form class="kf-search-menu">
                <input class='input-search' placeholder='search ....' type='text'>
                <button><i class='fa fa-search'></i></button>
            </form>
        </div>
		<div class="wrapper">
			<!--Header starts version.1-->
			<header class="header">
	            <!--Header top row version.1 ends-->
	            <div class="header-v1_navigation_row animated">
	               <div class="container">
	                  <div class="logo-here">
	                     <h1><a href="index-2.html"><img src="images/logo_v1.png" alt="44 by 150"></a></h1>
	                  </div>
	                  <div class="header-v1-nav txt-hvr3">
	                     <nav class="navigation">
	                        <ul>
	                           <li>
	                              <a href="index.php">Home</a>
	                           </li>
	                           <li>
	                              <a href="destinations.html">Cities</a><!--<small class="flg-1 orange-bg">New</small>--><i class="fa fa-angle-down"></i>
	                              <ul class="sub-menu children">
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
			

	                                 <li><a href="destinations-detail.php?id=<?php echo $city_id; ?>"><?php echo $city_name; ?></a></li>
	                             <!--    <li><a href="destinations-02.html"> Pune</a></li>
	                                 <li><a href="destinations-03.html">NashiK</a></li>
	                                 <li><a href="destinations-04.html">Kolhapur</a></li>
	                                 <li><a href="destinations-detail.html">Aurangabad</a></li>
	                                  <li><a href="destinations-detail.html">Mahabaleshwar</a></li>
	                                   <li><a href="destinations-detail.html">Nagpur</a></li>
	                                   <li><a href="destinations-detail.html">Raigad</a></li>
	                                   <li><a href="destinations.php">All Cities</a></li>-->

	                                   <?php
                    }
                }
?><li><a href="destinations.php">All Cities</a></li>
	                              </ul>
	                           </li>
	                           <li>
	                              <a href="tour-01.html">Category</a><i class="fa fa-angle-down"></i>
	                              <ul class="sub-menu children">
	                                 <li><a href="Attractionsnew.php">Places of Attraction</a></li>
	                                 <li><a href="Hotelsnew.php">Hotels/Restaurants</a></li>
	                                 <li><a href="Schoolsnew.php">Schools/Colleges</a></li>
	                                 <li><a href="Hospitalnew.php">Hospitals</a></li>
	                                 <li><a href="Shoppingnew.php">Shopping</a></li>
	                                
	                                 
	                              </ul>
	                           </li>
	                        <!--   <li><a href="">Travel Talk</a></li>-->
	                           <li>
	                              <a href="about-us.php">About Us</a>
	                           </li>

	                           <li><a href="contact-us.php">Contact Us</a></li>
	                        </ul>
	                     </nav>


	                <!--     <div class="dl-menuwrapper" >
	                        <button class="dl-trigger"></button>
	                     </div>-->
	                  </div>
	                  <div class="header-v1-right">
                        <div class="pull-left">
                            <div class="search-01"><div class='control-search' tabindex='1'><a class="btn"><i class='fa fa-search'></i></a></div></div>
                          </div>
                            
                          <div class="kode">
	                        <div class="kf_side_menu_btn">
	                           <i class="fa fa-bars" aria-hidden="true"></i>
	                           <div class="kode__line"></div>
	                        </div>
	                        <!--side menu content-->	
                            <div class="kode-demo-3">
                               <svg class="kode-overlays" viewBox="0 0 100 100" preserveAspectRatio="none">
                                  <path class="kode-overlays__path" d=""></path>
                                  <path class="kode-overlays__path" d=""></path>
                                  <path class="kode-overlays__path" d=""></path>
                               </svg>
                               <div class="kode-menu">
                                  <div class="kode-menu__wrap">
                                     <div class="group-01">
                                        <a class="kode-menu__item kode-menu__item--demo-3" href="destinations.php">All Cities</a>
                                        <a class="kode-menu__item kode-menu__item--demo-3" href="Attractionsnew.php">Places Of Attraction</a>
                                    <!--    <a class="kode-menu__item kode-menu__item--demo-3" href="comming-soon.html">Travel Talk</a>-->
                                        <a class="kode-menu__item kode-menu__item--demo-3" href="about-us.php">About Us</a>

                                        <a class="kode-menu__item kode-menu__item--demo-3" href="contact-us.php">Contact Us</a>
                                        
                                     </div>
                                  </div>
                                 <div class="close-btn">
                                     <div class="kode__line"><i class="fa fa-times" aria-hidden="true"></i></div>
                                  </div>
                               </div>
                               <!--side menu content ends-->
	                        </div>
	                     </div>


	                 <!--    <a href="login.php" class="btn-normal-1 effect2-color-1">Login</a>-->
	                  

					 <?php
                                if(isset($_SESSION['email']))
                                {

                        ?>
                         Welcome!! <!--<?php // echo $_SESSION['username'];?>-->
                         	<a href="logout.php" class="btn-normal-1 effect2-color-1">Logout</a>
                                        
                        <?php                
                                }
                                else
                                {
                        ?>
								<a href="login.php" class="btn-normal-1 effect2-color-1">Login</a>                                       

                        <?php
                                }
                        ?>
                       


	                  </div>
	               </div>
	            </div>
	         </header>
			<!--Header starts version.1 ends-->

</body>
</html>