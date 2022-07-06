<?php
session_start();
if($_SESSION['user']=='' or $_SESSION['user']==null){
  header("location:index.php?msg=loginfirst");
}

include ("connection.php");
$query = "select * from tbl_fee_status as tf join tbl_student_details as tsd on tf.fs_mobile=tsd.mobile where tsd.status='true' order by tf.fs_month_end";
echo $query;
die();
$res= mysqli_query($db_con,$query);


$q_date = "select CURRENT_DATE()";
$res_date = mysqli_query($db_con, $q_date);
$row_date = mysqli_fetch_array($res_date);

?>


<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <title>Softpro Library Hub : : Students's Fee List</title>

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
                            <h3 class="page-title">Students</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard /</a></li>
                                <li class="active">Students</li>
                            </ul>
                        </div>
                        <div class="col-auto text-end float-end ms-auto">
                            <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
                            <a href="add-student.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                                <th>S.No.</th>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Mobile Number</th>
                                                <th>Email</th>
                                                <th>Month Start</th>
                                                <th>Month End</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php
                                                $a=1;
                                                while($row=mysqli_fetch_array($res)) 
                                                {
                                                $monthend= $row["fs_month_end"];
                                                $mend=date('Y-m-d',(strtotime ( '-2 day' , strtotime ( $monthend) ) ));
                                                $Date= "$row[enroll_date]";
                                            ?>
                                                <tr class="border-2 <?php if($row_date[0]>$mend){ echo "border-danger"; }else{ echo "border-success"; }?>"> 
                                                    <td><?php echo $a; ?></td>
                                                   <td>SLH22<?Php echo $row["stu_id"]; ?></td>
                                                   <td><?php echo $row["name"]; ?></td>
                                                   <td><?php echo $row["mobile"]; ?></td>
                                                   <td><?php echo $row["email"]; ?></td>
                                                   <td><?php echo $row["fs_month_start"]; ?></td>
                                                   <td><?php echo $row["fs_month_end"]; ?></td>

                                                   <td>
                                                   <?php
                                                    if($row_date[0]>$mend)
                                                    {
                                                        
                                                        ?>
                                                            <a href="send_mail.php?email=<?php echo $row["email"]; ?>" class="btn btn-rounded btn-outline-danger">Send Mail</a>
                                                        <?php
                                                    }
                                                    else
                                                    {
                                                        ?>
                                                        <button type="button" class="btn btn-rounded btn-outline-success">Green Zone</button>

                                                        <?php
                                                    }
                                                   ?>
                                               
                                                </td>
                                                </tr>

                                            <?php
                                            $a++;
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

    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <script src="assets/js/script.js"></script>
  </body>

 </html>
