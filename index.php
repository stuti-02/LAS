<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Softpro Library Hub : : Login</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="main-wrapper login-body">
        <div class="login-wrapper">
            <div class="container">
                <div class="loginbox">
                    <div class="login-left">
                        <img class="img-fluid" src="assets/img/index_img.webp" style="width:100%;" alt="Logo">
                    </div>
                    <div class="login-right">
                        <div class="login-right-wrap">
                            <h1>Login</h1>
                            <p class="account-subtitle">Access to our dashboard</p>

                            <form action="index-code.php" method="post">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="password" placeholder="Password" name="pass" required>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block" type="submit">Login</button>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

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
            text: 'Invalid Email or Password!'
            })
        </script>
    <?php
    }elseif($msg=='logout'){
        ?>
        <script>
            Swal.fire({
            icon: 'success',
            title: 'Done',
            text: 'Logged Out Successfully!'
            })
        </script>
    <?php
    }elseif($msg=='loginfirst'){
        ?>
        <script>
            Swal.fire({
            icon: 'error',
            title: 'Oops',
            text: 'Login First!'
            })
        </script>
        <?php
    }
    }
    ?>
</body>

</html>