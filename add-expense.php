<?php
session_start();
if($_SESSION['user']=='' or $_SESSION['user']==null){
  header("location:index.php?msg=loginfirst");
}

include("connection.php");
$query_fee = "select * from tbl_fee_mgmt order by uploaded_date desc";
$res_fee=mysqli_query($db_con,$query_fee);
$row_fee=mysqli_fetch_array($res_fee);



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
    <title>Softpro Library Hub : : Expenses</title>

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

            <form method="post" action="add-expense-code.php">
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col-sm-9">
                                <h3 class="page-title">Add Expense</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard /</a></li>
                                    <li class="active">Add Expense</li>
                                </ul>
                            </div>
                            <div class="col-sm-3 text-end float-end ms-auto">
                                <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-calendar"></i> <input type="text" name="date" value="<?php echo $row_date[0]; ?>" readonly style="background: transparent;border:none"></a>
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
                                                        <th>Expense For</th>
                                                        <th>Amount</th>
                                                        <th>Description</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>
                                                        <select name="name" class="form-control" required>
                                                            <option value="Salary">Employee Salary</option>
                                                            <option value="Electricity">Electricity Bill</option>
                                                            <option value="Internet">Internet Bill</option>
                                                            <option value="Newspaper">Newspaper</option>
                                                            <option value="Other">Other Expenses</option>
                                                        </select>
                                                    </td>
                                                    <td><input type="text" name="amount" class="form-control" required></td>
                                                    <td><textarea name="" id=""  class="form-control" style="resize:none;"></textarea></td>
                                                    </tr>
                                                </tbody>

                                            </table>

                                            <button class="btn btn-warning text-light mt-4  ms-3">Submit</button>
                                        </div>
                                </div>
                            </div>
                        </div>

                    
                    </div>
            </form>



            
            

        </div>

    
    </div>


    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/plugins/select2/js/select2.min.js"></script>

    <script src="assets/js/script.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php
    if(isset($_REQUEST["msg"]))
    {
    $msg=$_REQUEST["msg"];
    if($msg=='1')
    {
    ?>
          <script>
              Swal.fire({
              icon: 'success',
              title: 'Success...',
              text: 'Expense Added Successfully!'
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
              text: 'Student Not Registered!'
              })
          </script>
    <?php
    }
    }
    ?>

  </body>

 </html>
