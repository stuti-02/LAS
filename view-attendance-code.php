<?php

include('connection.php');

$start_date=$_POST["sd"];
$end_date=$_POST["ed"];

$output = "";

$q_date = "select distinct date from tbl_attendance WHERE date BETWEEN '$start_date' AND '$end_date' order by date desc";
$res_date = mysqli_query($db_con, $q_date);

// echo $query;

if($res_date){
     $output .= "<tr><th>Name</th>";
        while($row_date = mysqli_fetch_array($res_date)){
            $output  .= "<th>".$row_date[0]."</th>";
        }
        $output .= "</tr>";

        $query= "select * from tbl_student_details where status='true'";
        $res = mysqli_query($db_con, $query);

        if($res)
            {
                while($row = mysqli_fetch_assoc($res)){
                    $mobile = $row['mobile'];
                    $output .= "<tr>
                    <td>
                    <h2 class='table-avatar'>
                    <a class='avatar avatar-sm me-2'><img class='avatar-img rounded-circle' src='assets/stu_pic/". $row['pic'] ."' alt='User Image'></a>
                    <a>". $row["name"]."<br><small><input type='text' name='get_phone' readonly value='". $row["mobile"] ."' style='border:none;'></small></a></h2> 
                    </td>";

                    $query_attend = "select * from tbl_attendance as ta where ta.mobile='{$mobile}' and ta.date BETWEEN '$start_date' AND '$end_date' order by ta.date desc";
                    $res_qatted = mysqli_query($db_con, $query_attend);
                    while($row_attend = mysqli_fetch_assoc($res_qatted)){
                        $output .= "<td><table class='table-bordered'><tr><td>". $row_attend['entry_time'] . " </td><td> " . $row_attend['exit_time'] . "</td></tr></table></td>";
                    }

                    $output .= "</tr>";
                }
                echo $output;
            }

            else
            {
                echo "Data not found";
            }


}


?>