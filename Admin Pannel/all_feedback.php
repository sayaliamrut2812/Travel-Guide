<!DOCTYPE html>
<html lang="en">
<!-- Copied from http://rn53themes.net/themes/demo/lava-admin/user-all.html by Cyotek WebCopy 1.7.0.600, Monday, September 9, 2019, 6:42:26 PM -->

<head>
    <title> Admin Panel </title>
   <?php include_once("css_file.php");  ?>
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
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
                        <li class="active-bre"><a href="#">Feedback Details</a>
                        </li>
                    </ul>
                </div>
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Feedback Details</h4>
                                   <!-- <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>-->
                                    <a class="dropdown-button drop-down-meta" href="#" data-activates="dr-users"><i class="material-icons">more_vert</i></a>
                                    <ul id="dr-users" class="dropdown-content">
                                        <li><a href="user-add.html">Add New</a>
                                        </li>
                                        <li><a href="user-edit.html">Edit</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li><a href="#!"><i class="material-icons">delete</i>Delete</a>
                                        </li>
                                        <li><a href="user-view.html"><i class="material-icons">subject</i>View All</a>
                                        </li>
                                    </ul>

                                    <!-- Dropdown Structure -->

                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Reg id</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Subject</th>
                                                    <th>Comment</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
              <?php

            include_once("config.php");

            $query = "SELECT * FROM tbl_feedback ";  
                $result = mysqli_query($conn,$query);
                if($result->num_rows!=0)
                {  
                    while($row=$result->fetch_array())  
                    {
                        $reg_id=$row['r_id'];
                        
                       $f_name=$row['f_name'];
                       $f_email=$row['f_email'];
                       $f_subject=$row['f_subject'];
                       $f_comment=$row['f_comment'];
                  ?>
            
                                                <tr>
                                                    <td><a href="#"><span class="list-enq-name"><?php echo $reg_id;?></span>
                                                        <!--<span class="list-enq-city">Illunois, United States</span>--></a>
                                                    </td>
                                                    <td><?php echo $f_name;?></td>
                                                    <td><?php echo $f_email;?></td>
                                                    <td><?php echo $f_subject;?></td>
                                                    <td><?php echo $f_comment;?></td>
                                                    
                                                    <!--    <td>
                                                        <a href="user-edit.php"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                                    </td>-->
                                                    <td>
                                                        
                                                            <form action="delete_feedback.php" method="POST">
                                                            <input type="hidden" value="<?php echo $row['f_id' ] ?>" name=f_id>
                                                            <button type="submit" style="background-color: green;"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                        </form>
                                                    </td>
                                 
                                               </tr>
                                <?php
                    }
                }
            ?>             
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--== BOTTOM FLOAT ICON ==-->
    <section>
        <div class="fixed-action-btn vertical">
            <a class="btn-floating btn-large red pulse">
                <i class="large material-icons">mode_edit</i>
            </a>
            <ul>
                <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a>
                </li>
                <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a>
                </li>
                <li><a class="btn-floating green"><i class="material-icons">publish</i></a>
                </li>
                <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a>
                </li>
            </ul>
        </div>
    </section>

    <!--======== SCRIPT FILES =========-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>

<!-- Copied from http://rn53themes.net/themes/demo/lava-admin/user-all.html by Cyotek WebCopy 1.7.0.600, Monday, September 9, 2019, 6:42:26 PM -->
</html>