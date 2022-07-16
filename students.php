<?php
session_start();
if($_SESSION['user']=='' or $_SESSION['user']==null){
  header("location:index.php?msg=loginfirst");
}


include("connection.php");
$query="select * from tbl_student_details where status='T' order by stu_id desc";
$res=mysqli_query($db_con,$query);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Softpro Library Hub : : Students List</title>

    <link rel="shortcut icon" href="assets/img/favicon.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

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
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title">Students</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="dashboard.php">Dashboard /</a></li>
                                <li class="active">Students</li>
                            </ul>
                        </div>
                        <div class="col-auto text-end float-end ms-auto">
                            <!-- <a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a> -->
                            <a href="add-student.php" class="btn btn-primary"><i class="fas fa-plus"></i></a>
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
                                                <th class="text-center">S.No.</th>
                                                <th class="text-center">ID</th>
                                                <th class="ps-5">Name</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Enrolled On</th>
                                                <th class="text-center">Details</th>
                                                <th class="text-end">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php
                                                $a=1;
                                                while($row=mysqli_fetch_array($res)) 
                                                {
                                            ?>
                                                <tr>
                                                    <td class="text-center"><?php echo $a; ?></td>
                                                    <td class="text-center">SLH22<?php echo "$row[stu_id]"; ?></td>
                                                    <td>
                                                    <h2 class="table-avatar">
                                                        <a class="avatar avatar-sm me-2"><img class="avatar-img rounded-circle" src="assets/stu_pic/<?php echo $row['pic'] ?>" alt="User Image"></a>
                                                        <a><?php echo $row["name"]; ?>
                                                        <br>
                                                        <small><input type="text" name="get_phone" readonly value="<?php echo $row["mobile"];?>" style="border:none;background-color: transparent;"></small>
                                                        
                                                        </a>
                                                    </h2>
                                                    </td>
                                                    <td class="text-center"><?php echo "$row[email]"; ?></td>
                                                    <td class="text-center"><?php echo "$row[enroll_date]"; ?></td>
                                                    <td class="text-center"><a href="student-details.php?id=<?php echo "$row[stu_id]"; ?>">View More</a></td>
                                                    <td class="text-end">
                                                        <div class="actions">
                                                            <a href="update-student.php?get_id=<?php echo "$row[stu_id]"; ?>" class="btn btn-sm bg-success-light me-2">
                                                                <i class="fas fa-pen"></i>
                                                            </a>

                                                           
                                                            <a href="#" onclick="confirm(this)" data-id="<?php echo $row['stu_id']; ?>" class="btn btn-sm bg-danger-light">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>

                                            <?php
                                                $a++;
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

    <script src="assets/plugins/datatables/datatables.min.js"></script>

    <script src="assets/js/script.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function confirm(el){

            let id = $(el).data('id');
         
            // console.log(id);

            Swal.fire({
                    title: 'Do you want to delete this record?',
                    showDenyButton: false,
                    showCancelButton: true,
                    confirmButtonText: 'Delete',
                    denyButtonText: `Cancel`,
                    }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed) {
                        window.location.href = `delete-student.php?get_id=${id}`;
                    } else if (result.isDenied) {
                        Swal.fire('Changes are not saved', '', 'info')
                    }
                })
        }

   
    </script>

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
                title: 'Deleted...',
                text: 'Student Data Deleted Successfully!'
                })
            </script>
        <?php
        }
        elseif($msg=='updated')
        {
        ?>
            <script>
                Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'Data Updated Successfully!'
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