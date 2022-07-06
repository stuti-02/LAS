<?php
session_start();
if($_SESSION['user']=='' or $_SESSION['user']==null){
  header("location:index.php?msg=loginfirst");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Softpro Library Hub : : Admin Profile</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

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
                        <div class="col">
                            <h3 class="page-title">Profile</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard / </a></li>
                                <li class="active">Profile</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-header">
                            <div class="row align-items-center">
                                <div class="col-auto profile-image">
                                    <a href="#">
                                        <img class="rounded-circle" alt="User Image" src="assets/admin/t-woner.png">
                                    </a>
                                </div>
                                <div class="col ms-md-n2 profile-user-info">
                                    <h4 class="user-name mb-0">Admin</h4>
                                    <h6 class="text-muted">Softpro Library Hub</h6>
                                    <div class="user-Location"><i class="fas fa-map-marker-alt"></i> Softpro Tower, Kapoorthala Road</div>
                                    <div class="about-text">Lucknow, Uttar Pradesh 226006</div>
                                </div>
                                <div class="col-auto profile-btn">
                                    <a href="#" class="btn btn-primary">
                                        Edit
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="profile-menu">
                            <ul class="nav nav-tabs nav-tabs-solid">
                                <li class="nav-item">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#per_details_tab">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" href="#password_tab">Password</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content profile-tab-cont">

                            <div class="tab-pane fade show active" id="per_details_tab">

                                <div class="row">
                                    <div class="col-lg-9">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title d-flex justify-content-between">
                                                    <span>Personal Details</span>
                                                    <a class="edit-link" data-bs-toggle="modal" href="#edit_personal_details"><i class="far fa-edit me-1"></i>Edit</a>
                                                </h5>
                                                <div class="row">
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Name</p>
                                                    <p class="col-sm-9">John Doe</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Date of Birth</p>
                                                    <p class="col-sm-9">24 Jul 1983</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Email ID</p>
                                                    <p class="col-sm-9"><a href="https://preschool.dreamguystech.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="c5afaaadaba1aaa085a0bda4a8b5a9a0eba6aaa8">[email&#160;protected]</a></p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0 mb-sm-3">Mobile</p>
                                                    <p class="col-sm-9">305-310-5857</p>
                                                </div>
                                                <div class="row">
                                                    <p class="col-sm-3 text-muted text-sm-end mb-0">Address</p>
                                                    <p class="col-sm-9 mb-0">4663 Agriculture Lane,<br>
                                                        Miami,<br>
                                                        Florida - 33165,<br>
                                                        United States.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">

                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title d-flex justify-content-between">
                                                    <span>Account Status</span>
                                                    <a class="edit-link" href="#"><i class="far fa-edit me-1"></i> Edit</a>
                                                </h5>
                                                <button class="btn btn-success" type="button"><i class="fe fe-check-verified"></i> Active</button>
                                            </div>
                                        </div>


                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title d-flex justify-content-between">
                                                    <span>Skills </span>
                                                    <a class="edit-link" href="#"><i class="far fa-edit me-1"></i> Edit</a>
                                                </h5>
                                                <div class="skill-tags">
                                                    <span>Html5</span>
                                                    <span>CSS3</span>
                                                    <span>WordPress</span>
                                                    <span>Javascript</span>
                                                    <span>Android</span>
                                                    <span>iOS</span>
                                                    <span>Angular</span>
                                                    <span>PHP</span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>


                            <div id="password_tab" class="tab-pane fade">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Change Password</h5>
                                        <div class="row">
                                            <div class="col-md-10 col-lg-6">
                                                <form action="change-pass-code.php" method="post">
                                                    <div class="form-group">
                                                        <label>Old Password</label>
                                                        <input type="password" class="form-control" name="old_pass" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>New Password</label>
                                                        <input type="password" class="form-control" name="new_pass" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Confirm Password</label>
                                                        <input type="password" class="form-control" name="confirm_pass" required>
                                                    </div>
                                                    <button class="btn btn-primary" type="submit">Save Changes</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php
    if(isset($_REQUEST['msg'])){
    $msg=$_REQUEST['msg'];
    if($msg=='1')
    {
    ?>
        <script>
            Swal.fire({
            icon: 'error',
            title: 'Oops',
            text: 'Old and New Passwords are same!'
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
            text: 'Old password is wrong!'
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
            title: 'Oops...',
            text: 'New and Confirm Passwords are not same!'
            })
        </script>
    <?php
    }
    elseif($msg=='4')
    {
    ?>
        <script>
            Swal.fire({
            icon: 'success',
            title: 'Success...',
            text: 'Password Updated Succesfully!'
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
            text: 'Try Again!'
            })
        </script>
    <?php
    }
}
?>

</body>


</html>