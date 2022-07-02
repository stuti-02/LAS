<?php
$get_phone = $_POST['get_phone'];
$date=$_POST['date'];


include ("connection.php");
$query="select * from tbl_attendance";


if(mysqli_query($db_con,$query))
{
    $query2= "update tbl_attendance set exit_time=CURRENT_TIME where mobile='$get_phone' and date='$date' and entry_time!=''";
    
    if(mysqli_query($db_con,$query2))
    {
        header("Location:exit-attendance.php?msg=clock-out succesfully");
    }
    else
    {
        header("Location:exit-attendance.php?msg=try-out after sometime");
    }
}
else
{
    header("Location:exit-attendance.php?msg=2");
}


?>