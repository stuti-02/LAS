<?php
session_start();
if($_SESSION['user']=='' or $_SESSION['user']==null){
  header("location:index.php?msg=loginfirst");
}


include ("connection.php");
$query="select * from tbl_student_details ";
$res = mysqli_query($db_con,$query);

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
    <title>Softpro Library Hub : : Add Attendance</title>

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
                            <h3 class="page-title">Mark Attendance</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard /</a></li>
                                <li class="active">Mark Attendance</li>
                            </ul>
                        </div>
                        
                    </div>
                </div>


            
            <form method="post" action="mark-attendance-code.php">
                <div class="row mt-5">
                    <div class="col-sm-7">
                        <div class="card card-table">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="btn btn-outline-primary me-2"><i class="fas fa-calendar"></i> <input type="text" name="date" value="<?php echo $row_date[0]; ?>" readonly style="background: transparent;border:none"></div>
                                                    </td>
                                                    <td>
                                                    <div class="col-12">
                                                        <button type="submit" class="btn btn-primary" id="my-btn">
                                                        Mark
                                                        </button>
                                                    </div>
                                                    </td>

                                                </tr>                          
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>


</div>

    
    </div>

   
    


    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <script src="assets/js/script.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php
    if(isset($_REQUEST['msg'])){
    $msg=$_REQUEST['msg'];
    if($msg=='1')
    {
    ?>
        <script>
            Swal.fire(
            'Success!',
            'Attendance Marked Sucessfully!',
            'success'
            )
        </script>
    <?php
    }
    elseif($msg=='marked')
    {
    ?>
        <script>
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Attendance Already Marked!'
            })
        </script>
    <?php
    }
    else
    {
    ?>
        <script>
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Something went wrong!'
            })
        </script>
    <?php
    }
    }
    ?>
  </body>

 </html>
