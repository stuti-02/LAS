<?php

include('connection.php');

$start_date=$_POST["sd"];
$end_date=$_POST["ed"];

$output = "";

$query= "select * from tbl_attendance as ta join tbl_student_details as tsa on ta.mobile=tsa.mobile WHERE ta.date BETWEEN '$start_date' AND '$end_date'";
// echo $query;
$res = mysqli_query($db_con, $query);

if($res)
{
    while($row = mysqli_fetch_assoc($res)){
        $output .= "<tr>
        <td>
        <h2 class='table-avatar'>
        <a class='avatar avatar-sm me-2'><img class='avatar-img rounded-circle' src='assets/stu_pic/". $row['pic'] ."' alt='User Image'></a>
        <a>". $row["fname"] . ' '  . $row['lname'] ."<br><small><input type='text' name='get_phone' readonly value='". $row["mobile"] ."' style='border:none;'></small></a></h2> 
        </td>
        <td> ". $row['date'] ." </td>
        <td> <button type='button' class='btn btn-rounded btn-outline-danger'>Absent</button> </td>
        <td> <button type='button' class='btn btn-rounded btn-outline-success'>Pressent</button> </td>
        <td>
            <a href='student-attendance.php'><button type='button' class='btn btn-rounded btn-outline-warning'>View All</button></a>
        </td>
        </tr>";
    
    }
    echo $output;
}

else
{
    echo "Data not found";
}



?>