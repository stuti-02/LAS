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
                          <label>First Name</label>
                          <input type="text" class="form-control" name="fname" required/>
                        </div>
                      </div>
                      <div class="col-12 col-sm-6">
                        <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" class="form-control" name="lname" required/>
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
                          <label>Enrollment Date</label>
                          <div>
                            <input type="date" class="form-control" name="enroll_date" required/>
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
                            <option>Select Gender</option>
                            <option value="female">Female</option>
                            <option value="male">Male</option>
                          </select>
                        </div>
                      </div>

                      
                      <div class="col-12 col-sm-4">
                        <div class="form-group">
                          <label>Student Image</label>
                          <input type="file" class="form-control" name="pic" required/>
                        </div>
                      </div>

                      <div class="col-12 col-sm-4">
                        <div class="form-group">
                          <label>Fee</label>
                          <div>
                            <input type="text" class="form-control" name="fee" "/>
                          </div>
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
            icon: 'error',
            title: 'Oops...',
            text: 'Mobile no. already exist!'
            })
        </script>
  <?php
  }
  }
  ?>

  </body>

 </html>
