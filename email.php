<?php
/*Send Email
      // $UserID=$_SESSION['UserID'];
        $UserID=$_REQUEST['UserID'];
        
        $Email=$_REQUEST['txtEmail'];
        $Subject="Email Verification";
        $IDType=$_REQUEST['cmbIDType'];
        $IDName=$_FILES['IDuploadfile']['name'];
          $Code2=rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
        $msg="WelCome To GiveUs Charity Website, Your Email Verification Password :
        <?php echo $Code2;?>";
     
        $from="giveus.charity@gmail.com";

        mail($Email,$Subject,$msg,$from);

        $_SESSION['Code']=$Code2;
        //echo $_SESSION['Code'];
        //header("location:CheckCode.php?UserID='$Last_Insert_ID'");
            /*End Send Email*/

        $name=$_REQUEST['name'];
        
        $Email=$_REQUEST['email'];
        $Subject="Email Verification";
        $msg="WelCome To Travel Guide, Your Email Verification Password :";
        $from="patilsayali1505@gmail.com";

        mail($Email,$Subject,$msg,$from);

        
?>