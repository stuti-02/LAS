<?php
$date=$_POST['date'];

include ("connection.php");
$query = "insert into tbl_attendance(date,mobile,entry_time,exit_time) values ('$date','$get_phone',CURRENT_TIME(),'')";
// echo $query;
// die();
$res = mysqli_query($db_con,$query);
if($res)
{
header("Location:attendance.php?Successful");
}
else
{

}
?>