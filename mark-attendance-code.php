<?php
$date=$_POST['date'];

include ("connection.php");
$query="select mobile from tbl_student_details";
$res = mysqli_query($db_con,$query);


while($row=mysqli_fetch_array($res))
{
    $mobile= $row["mobile"];
    $query2="insert into tbl_attendance(date,mobile,status,entry_time,exit_time) values ('$date','$mobile','Absent','','')";
    mysqli_query($db_con,$query2);
}

?>