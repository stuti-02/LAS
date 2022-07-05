<?php
include('connection.php');

$start_date=$_POST["sd"];
$end_date=$_POST["ed"];

$output = "";

$query= "select * from tbl_fee as tf join tbl_student_details as tsa on tf.mobile=tsa.mobile WHERE tf.payment_date BETWEEN '$start_date' AND '$end_date'";
echo $query;
exit();
$res = mysqli_query($db_con, $query);

?>