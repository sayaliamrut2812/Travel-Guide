
<!DOCTYPE html>
<html lang="en">
<!-- Copied from http://rn53themes.net/themes/demo/lava-admin/login.html by Cyotek WebCopy 1.7.0.600, Monday, September 9, 2019, 6:42:26 PM -->
<?php 

    $con=mysqli_connect("localhost","root","","travel");
    

    
    if(isset($_REQUEST['btn']))
    {
    $username= $_REQUEST["username"];
    $password= $_REQUEST["password"];

//$username=stripcslashes($username);
//$password=stripcslashes($password);

//$username = mysql_real_escape_string($username);
//$password = mysql_real_escape_string($password);


$result=mysqli_query($con,"select * from tbl_admin where admin_name='$username' and admin_pass='$password'" ) ;
  
  $row=mysqli_fetch_array($result);
  
  if($row['admin_name']== $username && $row['admin_pass'] == $password)
{
   echo "login success!!! welcome ".$row['username'];
   header ("Location: index.php");
}
else
{
   echo "failed to login";
   }

}
?>
<head>
    <title></title>
    <!--== META TAGS ==-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!--== FAV ICON ==-->
    <link rel="shortcut icon" href="images/fav.ico">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700" rel="stylesheet">

    <!-- FONT-AWESOME ICON CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!--== ALL CSS FILES ==-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mob.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/materialize.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="blog-login">
        <div class="blog-login-in">
            <form>
                <img src="images/logo.png" alt="">
                <div class="row">
                    <div class="input-field col s12">
                        <input id="first_name1" type="text" class="validate" name="username">
                        <label for="first_name1">User Name</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input id="last_name" type="password" class="validate" name="password">
                        <label for="last_name">Password</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="submit" name="btn" value="Login" class="waves-effect waves-light btn-large btn-log-in">
                        
                    </div>
                </div>
               
            </form>
        </div>
    </div>

    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>

<!-- Copied from http://rn53themes.net/themes/demo/lava-admin/login.html by Cyotek WebCopy 1.7.0.600, Monday, September 9, 2019, 6:42:26 PM -->
</html>