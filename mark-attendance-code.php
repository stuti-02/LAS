<?php
$date=$_POST['date'];

include ("connection.php");
$query="select mobile from tbl_student_details where status='T'";
$res = mysqli_query($db_con,$query);


$query_att = "select * from tbl_attendance where date='$date'";
$res_att = mysqli_query($db_con,$query_att);

if(mysqli_num_rows($res_att)>0)
{
    header("location:mark-attendance.php?msg=marked");
}
else
{
    if(mysqli_num_rows($res)>0)
    {
        while($row=mysqli_fetch_array($res))
        {
            $mobile= $row["mobile"];
            $query2="insert into tbl_attendance(date,mobile,status,entry_time,exit_time) values ('$date','$mobile','Absent','','')";
            mysqli_query($db_con,$query2);
        }
        header("location:mark-attendance.php?msg=1");
    
    }
    else
    {
        header("location:mark-attendance.php?msg=2");
    }
}


?>