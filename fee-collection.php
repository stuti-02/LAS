<?php
include ("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <title>Softpro Library Hub : : Fee Collection</title>

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
                            <h3 class="page-title">Fee Collection</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index-2.php">Student /</a></li>
                                <li class="active">Fee Collection</li>
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


            
            <form method="post" action="fee-collection-code.php">
                <div class="row mt-5">
                    <div class="col-sm-12">
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
    <script>
        $(document).ready(function(){
            $("#fetch-btn").on("click", function(e) {
                e.preventDefault();

                let sdate = $("#start-date").val();
                let edate = $("#end-date").val();


                $.ajax({
                    url:"fee-collection-code.php",
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
