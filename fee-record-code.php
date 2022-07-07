<?php
include('connection.php');

$start_date=$_POST["sd"];
$end_date=$_POST["ed"];

$output = "";

$q_date = "select * from tbl_fee as tf join tbl_student_details as tsd on tsd.mobile=tf.mobile WHERE tf.payment_date BETWEEN '$start_date' AND '$end_date' order by tf.payment_date desc";
// echo $q_date;
// die();
$res_date = mysqli_query($db_con, $q_date);


if($res_date){
    $output .= "<tr><th class='text-center'>S.No.</th><th class='ps-5'>Name</th><th class='text-center'>Month Start</th><th class='text-center'>Month End</th><th class='text-center'>Amount</th><th class='text-center'>Payment Method</th><th class='text-center'>Payment Date</th></tr>";

            $a=1;
               while($row = mysqli_fetch_assoc($res_date)){
                   $mobile = $row['mobile'];
                   $output .= "<tr>
                   <td class='text-center'>".$a."</td>
                   <td>
                   <h2 class='table-avatar'>
                   <a class='avatar avatar-sm me-2'><img class='avatar-img rounded-circle' src='assets/stu_pic/". $row['pic'] ."' alt='User Image'></a>
                   <a>". $row["name"]."<br><small><input type='text' name='get_phone' readonly value='". $row["mobile"] ."' style='border:none;'></small></a></h2> 
                   </td>
                   <td class='text-center'>". $row["month_start"] ."</td><td class='text-center'>".$row["month_end"]."</td><td class='text-center'>".$row["amount"]."</td><td class='text-center'>".$row["pay_via"]."</td><td class='text-center'>".$row["payment_date"]."</td>"
                   ;

                   $query_attend = "select * from tbl_attendance as ta where ta.mobile='{$mobile}' and ta.date BETWEEN '$start_date' AND '$end_date' order by ta.date desc";
                   $res_qatted = mysqli_query($db_con, $query_attend);
                   

                   $output .= "</tr>";
                   $a++;
               }
               echo $output;
           }

           else
           {
               echo "Data not found";
           }

?>