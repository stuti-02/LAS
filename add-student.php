<?php
session_start();
if($_SESSION['user']=='' or $_SESSION['user']==null){
  header("location:index.php?msg=loginfirst");
}


include("connection.php");
  $q_date = "select CURRENT_DATE()";
  $res_date = mysqli_query($db_con, $q_date);
  $row_date = mysqli_fetch_array($res_date);

  $query = "select * from tbl_fee_mgmt order by fee_id desc limit 1";
  $res = mysqli_query($db_con,$query);
  $row = mysqli_fetch_array($res);
  
?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <title>Softpro Library Hub : : Add Students</title>

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
              <div class="col-9">
                <h3 class="page-title">Add Students</h3>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="#">Students /</a>
                  </li>
                  <li class="active">Add Students</li>
                </ul>
              </div>
              <div class="col-3 text-end">
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
              <div class="card">
                <div class="card-body">
                  <form action="add-student-code.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                      <div class="col-12">
                        <h5 class="form-title">
                          <span>Student Information</span>
                        </h5>
                      </div>
                      <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label> Name</label>
                          <input type="text" class="form-control" name="name" required/>
                        </div>
                      </div>
                      
                      <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label>Student Image</label>
                          <input type="file" class="form-control" name="pic"/>
                        </div>
                      </div>

                      <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label>Mobile Number</label>
                          <input type="text" class="form-control" name="mobile" minlength="10" maxlength="10" required/>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label>Email</label>
                          <input type="text" class="form-control" name="email" required/>
                        </div>
                      </div>

                      <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label>Aadhar Card Number</label>
                          <input type="text" class="form-control" name="aadhar" minlength="12" maxlength="12" required/>
                        </div>
                      </div>

                      <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label>Aadhar Card Image</label>
                          <input type="file" class="form-control" name="aadhar_pic"/>
                        </div>
                      </div>

                      <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label>Enrollment Date</label>
                          <div>
                            <input type="text" class="form-control" name="enroll_date" value="<?php echo $row_date[0]; ?>" readonly required style="background:transparent;"/>
                          </div>
                        </div>
                      </div>
                     
                      <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label>Date of Birth</label>
                          <div>
                            <input type="date" class="form-control" name="dob" required/>
                          </div>
                        </div>
                      </div>

                      <div class="col-12 col-sm-4">
                        <div class="form-group">
                          <label>Gender</label>
                          <select class="form-control select" name="gender" required>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            
                          </select>
                        </div>
                      </div>
                    

                      <div class="col-12 col-sm-4">
                        <div class="form-group">
                          <label>Fee</label>
                          <div>
                            <input type="text" class="form-control" name="fee" value="<?php echo $row["fee_amt"]; ?>" style="background:transparent;"/>
                          </div>
                        </div>
                      </div>

                      <div class="col-12 col-sm-4">
                        <div class="form-group">
                          <label>Payment Method</label>
                          <select class="form-control select" name="pay_method" required>
                            <option value="cash">Cash</option>
                            <option value="upi">UPI</option>
                          </select>
                        </div>
                      </div>
                      
                      <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label>Present Address</label>
                          <textarea class="form-control" name="present_address" required></textarea>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label>Permanent Address</label>
                          <textarea class="form-control" name="permanent_address" required></textarea>
                        </div>
                      </div>
                      <div class="col-12">
                        <button type="submit" class="btn btn-primary">
                          Submit
                        </button>
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
              text: 'Student Enrolled Successfully!'
              })
          </script>
    <?php
    }
    elseif($msg=='2')
    {
    ?>
          <script>
              Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: 'Try Again!'
              })
          </script>
    <?php
    }
    elseif($msg=='3')
    {
    ?>
          <script>
              Swal.fire({
              icon: 'error',
              title: 'Image Error',
              text: 'Choose Correct Image!'
              })
          </script>
    <?php
    }
    elseif($msg=='4')
    {
    ?>
          <script>
              Swal.fire({
              icon: 'error',
              title: 'Format Error...',
              text: 'Choose Correct Image Format'
              })
          </script>
    <?php
    }
    elseif($msg=='5')
    {
    ?>
          <script>
              Swal.fire({
              icon: 'error',
              title: 'Oops..',
              text: 'Already Enrolled!'
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
              text: 'Already Enrolled!'
              })
          </script>
    <?php
    }

  }
  ?>

  </body>

 </html>
