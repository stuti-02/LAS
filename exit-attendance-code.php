<?php

$get_phone = $_POST['get_phone'];
$date=$_POST['date'];


include ("connection.php");
$query="select * from tbl_attendance where date='$date' and mobile='$get_phone'";
$res=mysqli_query($db_con,$query);
$row=mysqli_fetch_array($res);

if($row)
{

    if($row["status"]=='Present' && $row["entry_time"]!='')
    {
        if($row["exit_time"]=='')
        {
            $query2= "update tbl_attendance set exit_time=CURRENT_TIME where mobile='$get_phone' and date='$date' and entry_time!=''";
            if(mysqli_query($db_con,$query2))
            {
            header("Location:exit-attendance.php?msg=1");
            }
            else
            {
            header("Location:exit-attendance.php?msg=5");
            }
        }
        else
        {
            header("Location:exit-attendance.php?msg=6");
        }
    }

    else
    {
        header("Location:exit-attendance.php?msg=2");  
    }
    
}
else
{
    header("Location:exit-attendance.php?msg=3");  
}


?>