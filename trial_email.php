<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>
<?php 
 
/*Send Email*/

 /*       $UserID=$_SESSION['UserID'];
        $Email=$_REQUEST['txtEmail'];
        $Subject="Email Verification";
        $IDType=$_REQUEST['cmbIDType'];*/

		$Email="sayalipatil1505@gmail.com";
        $Subject="Email Verification";
        //$IDType=$_REQUEST['cmbIDType'];*/
        

        //$IDName=$_FILES['IDuploadfile']['name'];
          $Code2=rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
        $msg="WelCome To GiveUs Charity Website, Your Email Verification Password :
        <?php echo $Code2;?>";
     
        $from="sayalipatil1505@gmail.com";

       $result= mail($Email,$Subject,$msg,$from);
var_dump($result);
       // $_SESSION['Code']=$Code2;
        //echo $_SESSION['Code'];
        //header("location:CheckCode.php?UserID='$Last_Insert_ID'");
            /*End Send Email*/
?>