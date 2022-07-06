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
$row=mysqli_fetch_array($res);
$dlt_query = "update tbl_student_details set status='F' where stu_id='$get_id'";
mysqli_query($db_con,$dlt_query);

$dlt_fee_status = "delete from tbl_fee_status where fs_mobile='$row[mobile]'";
mysqli_query($db_con,$dlt_fee_status);
header("location:students.php?msg=1");
}
else
{
header("location:students.php?msg=2");
}

?>