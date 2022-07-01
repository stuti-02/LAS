<?php
include ("connection.php");
$query="select * from tbl_fee_mgmt order by fee_id desc limit 1";
$res=mysqli_query($db_con,$query);
$row = mysqli_fetch_array($res);
?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Softpro Library Hub : : Fee Management</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="main-wrapper">

        <?php
        include ("home_include/sidebar.php");
        ?>


        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Generate Barcode</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#s">Barcode / </a></li>
                                <li class="active">Generate Barcode</li>
                            </ul>
                        </div>
                    </div>
                </div>
                


                <div class="row">
                    <div class="col-sm-12">
                    <iframe src="https://www.ruggedtabletpc.com/barcodegen" frameborder="0" style="width:100%; height:1100px"></iframe>
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
</body>

</html>