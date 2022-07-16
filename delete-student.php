
<?php
session_start();
if($_SESSION['user']=='' or $_SESSION['user']==null){
  header("location:index.php?msg=loginfirst");
}


$get_id= $_REQUEST['get_id'];
include ("connection.php");
$query="select * from tbl_student_details where stu_id='$get_id'";
$res= mysqli_query($db_con,$query);

if(mysqli_num_rows($res)>0)
{
?>
    
        <?php
          $row=mysqli_fetch_array($res);
          $dlt_query = "update tbl_student_details set status='F' where mobile='$row[mobile]'";
          
          if(mysqli_query($db_con,$dlt_query))
          {
            $dlt_fee_status = "update tbl_fee_status set stu_status='F' where fs_mobile='$row[mobile]'";
            mysqli_query($db_con,$dlt_fee_status);
            header("location:students.php?msg=1");
          }
          else
          {
            header("location:students.php?msg=2");
          }

        ?>
       
<?php



}
else
{
header("location:students.php?msg=2");
}

?>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>