
<?php

include('connection.php');

$start_date=$_POST["sd"];
$end_date=$_POST["ed"];

$output = "";
$sum = 0;

$query= "select * from tbl_expense WHERE uploaded_date BETWEEN '$start_date' AND '$end_date' order by expid desc";


$res = mysqli_query($db_con, $query);


$output .="<tr>
            <th>S.No.</th>
            <th>Expense Name</th>
            <th>Amount</th>
            <th>Date</th>
        </tr>";


if($res)
{
    $a=1;
    while($row = mysqli_fetch_assoc($res)){
        $output .= "<tr><td>".$a."</td><td>". $row['expname']."</td><td>" .$row['expamt']."</td><td>".$row['uploaded_date']."</td></tr>";
        $sum=$sum+$row['expamt'];
    $a++;
    }



    // echo $output;
    $res_data = [$output,$sum];
    echo json_encode($res_data);
}

?>
