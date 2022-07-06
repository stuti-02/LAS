<?php
session_start();
if($_SESSION['user']=='' or $_SESSION['user']==null){
  header("location:index.php?msg=loginfirst");
}


include("connection.php");
$query="select tsd.name, tsd.mobile, tsd.pic, ta.status, ta.entry_time, ta.exit_time, ta.date from tbl_attendance as ta join tbl_student_details as tsd on ta.mobile=tsd.mobile where ta.date=CURRENT_DATE()";
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

                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">View Attendance</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard /</a></li>
                                    <li class="active">View Attendance</li>
                                </ul>
                            </div>

                            
                            <?php
                            $q_date = "select CURRENT_DATE()";
                            $res_date = mysqli_query($db_con, $q_date);
                            $row_date = mysqli_fetch_array($res_date);
                            ?>

                                <div class="col-auto text-end float-end ms-auto">
                                    <div href="#" class="btn btn-outline-primary me-2"><i class="fas fa-calendar"></i> <input type="text" name="start_date" value="<?php echo $row_date[0]; ?>" id="start-date" style="background: transparent;border:none">
                                    </div>
                                </div>
                                <div class="col-auto text-end float-end ms-auto">
                                        <div href="#" class="btn btn-outline-primary me-2"><i class="fas fa-calendar"></i> <input type="text" name="end_date" value="<?php echo $row_date[0]; ?>" id="end-date" style="background: transparent;border:none"></div>
                                </div>
                                <div class="col-auto text-end float-end ms-auto">
                                        <input type="button" class="btn btn-outline-primary me-2" id="fetch-btn" value="Fetch Students"/>
                                </div>
                        </div>
                    </div>
                

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover table-center mb-0 datatable" id="tbl-body">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>Clock-In Time</th>
                                                    <th>Clock-Out Time</th>
                                                    <th>Details</th>
                                                </tr>
                                            </thead>
                                            <tbody >
                                                <?php
                                                    $i=1;
                                                    while($row=mysqli_fetch_array($res)){
                                                ?>
                                                <tr>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                        <a class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/stu_pic/<?php echo $row['pic'] ?>" alt="User Image"></a>
                                                        <a><?php echo $row["name"]; ?>
                                                        <br>
                                                        <small><input type="text" name="get_phone" readonly value="<?php echo $row["mobile"];?>" style="border:none;"></small>
                                                        
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
                                                            }else{
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

                                                    <td>
                                                        <a href="student-attendance.php"><button type="button" class="btn btn-rounded btn-outline-warning">View All</button></a>
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

           

        </div>

    
    </div>

    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <script src="assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>

    <script>
        $(document).ready(function(){
            $("#fetch-btn").on("click", function(e) {
                e.preventDefault();

                let sdate = $("#start-date").val();
                let edate = $("#end-date").val();

                // console.log(sdate);
                // console.log(edate);

                $.ajax({
                    url:"view-attendance-code.php",
                    type:"post",
                    data:{sd:sdate, ed:edate},
                    beforeSend:function(){
                        console.log("loading...")
                    },
                    success:function(data){
                        // handle the response
                        // console.log(data)
                        $("#tbl-body").html(data);
                    }

                })

               
            })
        })
    </script>
    
  </body>

 </html>
