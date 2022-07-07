<?php

include('connection.php');

$start_date=$_POST["sd"];
$end_date=$_POST["ed"];

$output = "";
$sum=0;
$sum_cash=0;
$sum_upi=0;

$query= "select * from tbl_fee as tf join tbl_student_details as tsa on tf.mobile=tsa.mobile WHERE tf.payment_date BETWEEN '$start_date' AND '$end_date' order by payment_date desc";

$res = mysqli_query($db_con, $query);

$q_upi = "select * from tbl_fee as tf join tbl_student_details as tsa on tf.mobile=tsa.mobile WHERE tf.payment_date BETWEEN '$start_date' AND '$end_date' and pay_via='upi'";
$res_upi = mysqli_query($db_con,$q_upi);



$q_cash = "select * from tbl_fee as tf join tbl_student_details as tsa on tf.mobile=tsa.mobile WHERE tf.payment_date BETWEEN '$start_date' AND '$end_date' and pay_via='cash'";
$res_cash = mysqli_query($db_con,$q_cash);

$output.="<tr>
            <th>S.No.</th>
            <th>Date</th>
            <th>Amount</th>
            <th>Payment Method</th>
        </tr>";


if($res)
{
    $a=1;
    while($row = mysqli_fetch_assoc($res)){
        $output .= "<tr><td>".$a."</td><td>". $row['payment_date']."</td><td>" .$row['amount']."</td><td>".$row['pay_via']."</td></tr>";
        $sum=$sum+$row['amount'];
    $a++;
    }

    while($row_cash = mysqli_fetch_array($res_cash)){
        $sum_cash=$sum_cash+$row_cash['amount'];
    }

    while($row_upi = mysqli_fetch_array($res_upi)){
        $sum_upi=$sum_upi+$row_upi['amount'];
    }


    $res_data = [$output, $sum, $sum_upi, $sum_cash];
    echo json_encode($res_data);
}

?>
