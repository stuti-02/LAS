<!DOCTYPE html>
<html lang="en">


<?php
$get_id= $_REQUEST['get_id'];
include ("connection.php");
$query="select * from tbl_student_details where stu_id='$get_id'";
$res= mysqli_query($db_con,$query);
$row=mysqli_fetch_array($res);
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Softpro Library Hub : : Edit Students</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="main-wrapper">

        <?php
        include ("home_include/sidebar.php");
        ?>


        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Update Student's Details</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="students.html">Students / </a></li>
                                <li class="active">Update Student's Details</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <form method="post" action="update-student-code.php" enctype="multipart/form-data">
                                    <div class="row">
                                        <input type="hidden" name="id" value="<?php echo $row['stu_id'] ?>">
                                        <div class="col-12">
                                            <h5 class="form-title"><span>Student Information</span></h5>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" name="fname" class="form-control" value="<?php echo "$row[fname]"; ?>">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" name="lname" class="form-control" value="<?php echo "$row[lname]"; ?>">
                                            </div>
                                        </div>
                                        
                                       
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <div>
                                                    <input type="text" name="dob" class="form-control" value="<?php echo "$row[dob]"; ?>">
                                                </div>
                                            </div>
                                        </div>
                            
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Joining Date</label>
                                                <div>
                                                    <input type="text" name="enroll_date" class="form-control" value="<?php echo "$row[enroll_date]"; ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Mobile Number</label>
                                                <input type="text" name="mobile" class="form-control" value="<?php echo "$row[mobile]"; ?>">
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" name="email" class="form-control" value="<?php echo "$row[email]"; ?>">
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Present Address</label>
                                                <input type="text" name="present_address" class="form-control" value="<?php echo "$row[present_address]"; ?>">
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Permanent Address</label>
                                                <input type="text" name="permanent_address" class="form-control" value="<?php echo "$row[permanent_address]"; ?>">
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Gender</label>
                                                <input type="text" name="gender" class="form-control" value="<?php echo "$row[gender]"; ?>">
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Student Image</label> <br>
                                                <img src="assets/stu_pic/<?php echo "$row[pic]"; ?>" height="100px" style="border:1px solid grey;" alt=""> 
                                                <input type="file" class="ms-3" name="pic"/>
                                            </div>
                                        </div>

                                        <div class="col-12 mt-3">
                                            <button type="submit" class="btn btn-primary">Update</button>
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


    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/html-template/template/edit-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jun 2022 06:52:04 GMT -->

</html>