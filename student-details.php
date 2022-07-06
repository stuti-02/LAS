<?php
session_start();
if($_SESSION['user']=='' or $_SESSION['user']==null){
  header("location:index.php?msg=loginfirst");
}


include("connection.php");
$q_date = "select CURRENT_DATE()";
$res_date = mysqli_query($db_con, $q_date);
$row_date = mysqli_fetch_array($res_date);


$get_id=$_REQUEST['id'];

$query="select * from tbl_student_details where stu_id='$get_id' and status='true'";
$res=mysqli_query($db_con,$query);
$row=mysqli_fetch_array($res);

$get_phone=$row["mobile"];

$query_fee = "select * from tbl_fee where mobile='$get_phone' order by month_start desc";
$res_fee = mysqli_query($db_con,$query_fee);

$query_att = "select * from tbl_attendance where mobile='$get_phone'";
$res_att = mysqli_query($db_con,$query_att);
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
                                                    <span class="info-span"><?php echo "$row[name]"; ?></span>
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
                                                <h5>Permanent Address</h5>
                                                <p><?php echo "$row[permanent_address]"; ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <div class="blue-box">
                                                <h5>Present Address</h5>
                                                <p><?php echo "$row[present_address]"; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>


                        
                        <div class="row mt-5">
                            <div class="col-sm-8 table-responsive">
                                <table class="table table-hover table-center mb-0 datatable border">
                                    <thead>
                                        <h4 class="text-center py-4 border">Fee Status</h4>
                                        <tr>
                                            <th class="text-center">Month Start</th>
                                            <th class="text-center">Month End</th>
                                            <th class="text-center">Amount</th>
                                            <th class="text-center">Method</th>
                                            <th class="text-center">Payment Date</th>
                                            <th class="text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        while($row_fee=mysqli_fetch_array($res_fee))
                                        {
                                        ?>
                                            <tr>
                                                <td class="text-center">
                                                    <?php echo "$row_fee[month_start]"; ?>
                                                </td>

                                                <td class="text-center">
                                                    <?php echo "$row_fee[month_end]"; ?>
                                                </td>

                                                <td class="text-center">
                                                    <?php echo "$row_fee[amount]"; ?>
                                                </td>

                                                <td class="text-center">
                                                    <?php echo "$row_fee[pay_via]"; ?>
                                                </td>

                                                <td class="text-center">
                                                    <?php echo "$row_fee[payment_date]"; ?>
                                                </td>

                                                <td class="text-center">
                                                    <?php
                                                        if($row_fee["month_end"]>$row_date[0])
                                                        {
                                                        ?>
                                                            <button type="button" class="btn btn-rounded btn-outline-success">Paid</button>
                                                        <?php
                                                        }
                                                        else
                                                        {
                                                        ?>
                                                            
                                                        <?php
                                                        }
                                                    ?>
                                                </td>
                                        </tr>

                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-sm-4 table-responsive">
                                <table class="table table-hover table-center mb-0 datatable border">
                                    <thead>
                                        <h4 class="text-center py-4 border">Attendance Status</h4>
                                        <tr>
                                            <th class="text-center">Date</th>
                                            <th class="text-center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php
                                            while($row_att=mysqli_fetch_array($res_att))
                                            {
                                            ?>
                                                <tr>
                                                
                                                    <td class="text-center"><?php echo $row_att["date"]; ?></td>
                                                    <td class="text-center">
                                                        <?php
                                                            if($row_att["status"]=="Present")
                                                            {
                                                        ?>
                                                            <button type="button" class="btn btn-rounded btn-outline-success">Present</button>
                                                        <?php
                                                            }
                                                            else
                                                            {
                                                        ?>
                                                            <button type="button" class="btn btn-rounded btn-outline-danger">Absent</button>
                                                        <?php
                                                            }
                                                        ?>
                                                    </td>
                                                </tr>
                                            <?php
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


    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>


</html>