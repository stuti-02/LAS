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
    <title>Softpro Library Hub : : Add Fee</title>

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

            <form method="post" action="add-fee-code.php">
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col-sm-7">
                                <h3 class="page-title">Add Fee</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Dashboard /</a></li>
                                    <li class="active">Add Fee</li>
                                </ul>
                            </div>
                            <div class="col-sm-3 text-end float-end ms-auto">
                                <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-calendar"></i> <input type="text" name="date" value="<?php echo $row_date[0]; ?>" readonly style="background: transparent;border:none"></a>
                            </div>
                            <div class="col-sm-2 text-end">
                                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">Show QR For Payment</button>

                                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                                <div class="offcanvas-header">
                                    <h5 id="offcanvasRightLabel">Pay Here </h5>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body text-center">
                                    <img src="assets/img/logo-small.png" alt="" style="height:10rem;">
                                    <h5 class="mt-3"><u>Softpro Library Hub</u></h5>

                                    <img src="assets/img/payment-qr.jpeg" alt="Something went wrong" style="height:14rem; margin-top:3rem;">
                                </div>
                                </div>
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
                                                        <th>Full Name</th>
                                                        <th>Mobile Number</th>
                                                        <th>Amount</th>
                                                        <th>Payment Method</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><input type="text" name="name" class="form-control" required></td>
                                                    <td><input type="text" name="mobile" class="form-control" required minlength="10" maxlength="10"></td>
                                                    <td><input type="text" name="amount" class="form-control" value="<?php echo $row_fee["fee_amt"]; ?>"  style="background: transparent;"></td>
                                                    <td>
                                                    <select name="pay_method" class="form-control">
                                                        <option value="cash">Cash</option>
                                                        <option value="upi">UPI</option>
                                                    </select></td>
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
            

            <?php
            $query_fetch = "select * from tbl_student_details join tbl_fee on tbl_student_details.mobile=tbl_fee.mobile where tbl_student_details.status='T' order by tbl_fee.fee_id desc limit 10";
            $res_fetch = mysqli_query($db_con,$query_fetch);
            ?>


            <div class="row mt-5 pt-5">
                            <div class="col">
                                <h3 class="page-title">View Fee</h3>
                            </div>
                        <div class="col-sm-12 mt-3">
                            <div class="card card-table">
                                <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-center mb-0 datatable">
                                                <thead>
                                                    <tr>
                                                        <th class="text-center">S.No.</th>
                                                        <th class="text-center">Full Name</th>
                                                        <th class="text-center">Mobile Number</th>
                                                        <th class="text-center">Amount</th>
                                                        <th class="text-center">Payment Method</th>
                                                        <th class="text-center">Month Start</th>
                                                        <th class="text-center">Month End</th>
                                                        <th class="text-center">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                            
                                                <?php
                                                if(mysqli_num_rows($res_fetch))
                                                {
                                                    $a=1;
                                                    while($row_fetch = mysqli_fetch_array($res_fetch))
                                                    {
                                                    ?>
                                                        <tr>
                                                            <td class="text-center"><?php echo $a; ?></td>
                                                            <td class="text-center"><?php echo $row_fetch["name"]; ?></td>
                                                            <td class="text-center"><?php echo $row_fetch["mobile"]; ?></td>
                                                            <td class="text-center"><?php echo $row_fetch["amount"]; ?></td>
                                                            <td class="text-center"><?php echo $row_fetch["pay_method"]; ?></td>
                                                            <td class="text-center"><?php echo $row_fetch["month_start"]; ?></td>
                                                            <td class="text-center"><?php echo $row_fetch["month_end"]; ?></td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-rounded btn-outline-success">Paid</button>
                                                            </td>
                                                        </tr>

                                                    <?php
                                                    $a++;
                                                    }
                                                }
                                                else
                                                {
                                                ?>

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
    if($msg=='user-error')
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
