<?php
$get_id=$_REQUEST['id'];
include("connection.php");
$query="select * from tbl_student_details where stu_id='$get_id'";
$res=mysqli_query($db_con,$query);
$row=mysqli_fetch_array($res);
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Softpro Library Hub : : Student Details</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="main-wrapper">

    <?php
    include("home_include/sidebar.php");
    ?>   

        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Student Details</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="students.html">Student /</a></li>
                                <li class=" active">Student Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="about-info">
                                    <h4>About Student</h4>
                                    <div class="media mt-3 d-flex">
                                        <img src="assets/stu_pic/<?php echo "$row[pic]"; ?>" class="me-3 flex-shrink-0" alt="...">
                                        <div class="media-body flex-grow-1">
                                            <ul>
                                                <li>
                                                    <span class="title-span">Full Name : </span>
                                                    <span class="info-span"><?php echo "$row[fname] $row[lname]"; ?></span>
                                                </li>
                                                <li>
                                                    <span class="title-span">Mobile : </span>
                                                    <span class="info-span"><?php echo "$row[mobile]"; ?></span>
                                                </li>
                                                <li>
                                                    <span class="title-span">Email : </span>
                                                    <span class="info-span"><?php echo "$row[email]"; ?></span>
                                                </li>
                                                <li>
                                                    <span class="title-span">Gender : </span>
                                                    <span class="info-span"><?php echo "$row[gender]"; ?></span>
                                                </li>
                                                <li>
                                                    <span class="title-span">DOB : </span>
                                                    <span class="info-span"><?php echo "$row[dob]"; ?></span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="row follow-sec mt-5">
                                        <div class="col-md-4 mb-3">
                                            <div class="blue-box">
                                                <h5>Enrollment Date</h5>
                                                <p><?php echo "$row[enroll_date]"; ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="blue-box">
                                                <h3>Total Fee</h3>
                                                <p>Following</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="blue-box">
                                                <h3>2950</h3>
                                                <p>Friends</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <h5>Permanent Address</h5>
                                            <p><?php echo "$row[permanent_address]"; ?></p>
                                        </div>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-md-12">
                                            <h5>Present Address</h5>
                                            <p><?php echo "$row[present_address]"; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="skill-info pt-5">
                                    <h4>Fee Status</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, simply dummy text of the printing and typesetting industry</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <footer>
                <p>Copyright &copy; 2022 Designed & Developed By I Softpro India Computer Technologies (P) Ltd.</p>
            </footer>

        </div>

    </div>


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from preschool.dreamguystech.com/html-template/template/student-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jun 2022 06:52:02 GMT -->

</html>