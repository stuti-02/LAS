<?php
$get_phone = $_POST['get_phone'];
$date = $_POST['date'];


include ("connection.php");
$query="update tbl_attendance set status='Present', entry_time=CURRENT_TIME where date='$date' and mobile='$get_phone'";
if(mysqli_query($db_con,$query))
{
header("Location:entry-attendance.php?msg=1");
}
else
{
header("Location:entry-attendance.php?msg=2");
}
?>