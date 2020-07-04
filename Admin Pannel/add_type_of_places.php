
<?php
include_once("config.php");
if (isset($_POST['btn1_submit'])) 
{
   
    $t_name=$_POST['t_name'];
    $t_image=$_POST['t_image'];
  
  
$query="insert into tbl_type_of_place (t_name,t_image) values('$t_name','$t_image')";

$run=mysqli_query($conn,$query);


if($run)
{

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
<!-- Copied from http://rn53themes.net/themes/demo/lava-admin/listing-add.html by Cyotek WebCopy 1.7.0.600, Monday, September 9, 2019, 6:42:26 PM -->

<head>
    <title> Admin Panel </title>
   <?php include_once("css_file.php");  ?>
</head>
<body>
    <!--== MAIN CONTRAINER == -->
  <?php include_once("header.php") ?>
    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <?php include_once("sidebar.php") ?>
            <div class="sb2-2">
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Add type of places</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-add-blog sb2-2-1">
                    <h2>Add Type Of Places</h2>
                    
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <div class="box-inn-sp">
                                <div class="bor">
                                    <form method="POST" action="">
                                        <div class="row">
                                           <div class="input-field col s12">
                                                <input id="list-name" type="text" class="validate" name="t_name">
                                                <label for="list-name">Enter Type of Place </label>
                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="input-field col s12">
                                            <div class="file-field input-field">
                                                <div class="btn">
                                                    <span>Image</span>
                                                    <input type="file">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text" placeholder="Upload  image" name="t_image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="Submit" class="waves-effect waves-light btn-large" value="Submit" name="btn1_submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      
                        

 


           

                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>

<!-- Copied from http://rn53themes.net/themes/demo/lava-admin/listing-add.html by Cyotek WebCopy 1.7.0.600, Monday, September 9, 2019, 6:42:26 PM -->
</html>