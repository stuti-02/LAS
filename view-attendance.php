<?php
include("connection.php");
$query="select * from tbl_attendance join tbl_student_details on tbl_attendance.mobile=tbl_student_details.mobile where tbl_attendance.date=CURRENT_DATE()";
// echo $query;
// exit();
$res=mysqli_query($db_con,$query);
?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"/>
    <title>Softpro Library Hub : : Students's Attendance List</title>

    <link rel="shortcut icon" href="assets/img/favicon.png" />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap"
    />

    <link
      rel="stylesheet"
      href="assets/plugins/bootstrap/css/bootstrap.min.css"
    />

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

                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">View Attendance</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.php">Dashboard /</a></li>
                                <li class="active">View Attendance</li>
                            </ul>
                        </div>
                        <div class="col-auto text-end float-end ms-auto">
                            <input type="date" class="btn btn-outline-primary me-2" value=""/>
                        </div>
                    </div>
                </div>

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
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $i=1;
                                                while($row=mysqli_fetch_array($res)){
                                            ?>
                                               <tr>
                                                <td>
                                                    <h2 class="table-avatar">
                                                    <a class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/stu_pic/<?php echo $row['pic'] ?>" alt="User Image"></a>
                                                    <a><?php echo $row["fname"] . " " . $row['lname']; ?>
                                                    <br>
                                                    <small><?php echo $row["mobile"]; ?></small>
                                                    </a>
                                                    </h2>
                                                </td>

                                                <td>
                                                    <?php
                                                    echo $row['date'];
                                                    ?>
                                                </td>

                                                <td>
                                                    <?php
                                                        if($row["status"]=='Absent'){
                                                    ?>
                                                        <button type="button" class="btn btn-rounded btn-outline-danger">Absent</button>
                                                    <?php
                                                        }elseif($row["status"]=='Present'){
                                                    ?>
                                                        <button type="button" class="btn btn-rounded btn-outline-success"><?php echo $row['entry_time'] ?></button>
                                                    <?php
                                                        }
                                                    ?>
                                                </td>

                                                <td>
                                                    <?php
                                                    if($row["status"]=='Present'){
                                                        if($row["exit_time"]==''){
                                                    ?>
                                                        <button type="button" class="btn btn-rounded btn-outline-danger">Not Marked</button>
                                                    <?php
                                                        }else{
                                                    ?>
                                                        <button type="button" class="btn btn-rounded btn-outline-success"><?php echo $row['exit_time'] ?></button>
                                                    <?php
                                                        }
                                                    }else{
                                                    ?>
                                                    <button type="button" class="btn btn-rounded btn-outline-danger">Absent</button>
                                                    <?php
                                                    }
                                                    ?>
                                                </td>
                                               </tr>  
                                               
                                               <?php
                                                }
                                                $i++;
                                               ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                
            </footer>

        </div>

    
    </div>

    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <script src="assets/js/script.js"></script>
  </body>

 </html>
