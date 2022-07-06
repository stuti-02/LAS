<?php
session_start();
if($_SESSION['user']=='' or $_SESSION['user']==null){
  header("location:index.php?msg=loginfirst");
}


$get_phone=$_POST["get_phone"];
var_dump($get_phone);
exit();
include ("connection.php");
$query="select * from tbl_student_details";
?>


<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"/>
    <title>Softpro Library Hub : : Students's All Attendance List</title>

    <link rel="shortcut icon" href="assets/img/favicon.png" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap"/>

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css"/>

    <link
      rel="stylesheet"
      href="assets/plugins/fontawesome/css/fontawesome.min.css"
    />
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css" />

    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css" />

    <link rel="stylesheet" href="assets/css/style.css" />
</head>
  <body>
    <div class="main-wrapper">


    <?php
    include ("home_include/sidebar.php");
    ?>

        <div class="page-wrapper">
            <div class="content container-fluid">

                <form action="view-attendance-code.php" method="post">
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">Student's Attendance</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard /</a></li>
                                    <li class="active">Student's Attendance</li>
                                </ul>
                            </div>
                            <div class="col-auto text-end float-end ms-auto">
                            <div href="#" class="btn btn-outline-primary me-2"><i class="fas fa-calendar"></i> <input type="text" name="start_date" value="<?php echo date("Y-m-d") ?>" style="background: transparent;border:none"></div>
                                
                            </div>
                            <div class="col-auto text-end float-end ms-auto">
                                <div href="#" class="btn btn-outline-primary me-2"><i class="fas fa-calendar"></i> <input type="text" name="end_date" value="<?php echo date("Y-m-d") ?>" style="background: transparent;border:none"></div>
                            </div>
                            <div class="col-auto text-end float-end ms-auto">
                                <input type="submit" class="btn btn-outline-primary me-2" id="btn1" value="Fetch Attendance"/>
                            </div>
                        </div>
                    </div>
                </form>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-center mb-0 datatable">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>Clock-In Time</th>
                                                    <th>Clock-Out Time</th>
                                                    <th>Details</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
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

    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <script src="assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

   
  </body>

 </html>
