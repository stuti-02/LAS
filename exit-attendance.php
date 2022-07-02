<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <title>Softpro Library Hub : : Exit Attendance</title>

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

            <form method="post" action="exit-attendance-code.php">
                    <div class="page-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="page-title">Exit Attendance</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index-2.php">Student's /</a></li>
                                    <li class="active">Exit Attendance</li>
                                </ul>
                            </div>
                            <div class="col-auto text-end float-end ms-auto">
                                <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-calendar"></i> <input type="text" name="date" value="<?php echo date("Y-m-d") ?>" style="background: transparent;border:none"></a>
                            </div>
                        </div>
                    </div>

           
                
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card card-table">
                                <div class="card-body">
                                    <div class="table-responsive">
                                            <table class="table table-hover table-center mb-0 datatable">
                                                <thead>
                                                    <tr>
                                                        <th>Phone No.</th>
                                                    </tr>
                                                </thead>
                                                <tbody>                                                
                                                        <tr>
                                                            <td><input type="text" name="get_phone" autofocus/></td>
                                                            <td><button type="submit" class="btn btn-primary">
                                                                Submit
                                                            </button>
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

               
            </form>
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



  </body>

 </html>
