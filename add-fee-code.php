<?php
$name = $_POST["name"];
$mobile = $_POST["mobile"];
$amount = $_POST["amount"];
$pay_method = $_POST["pay_method"];
$date = $_POST["date"];



include ("connection.php");
$mend = "select month_end from tbl_fee where mobile='$mobile' order by month_end desc limit 1";
$res_mend=mysqli_query($db_con,$mend);
$row_mend=mysqli_fetch_array($res_mend);
$monthend= $row_mend[0];
$nextmstart =date('Y-m-d',(strtotime ( '+1 day' , strtotime ( $monthend) ) ));
$nextmend = date('Y-m-d', strtotime($nextmstart. ' +30 days'));


$query = "select * from tbl_fee join tbl_student_details on tbl_fee.mobile=tbl_student_details.mobile where tbl_student_details.status='true' and tbl_fee.mobile='$mobile'";
// echo $query;
$res = mysqli_query($db_con,$query);

if(mysqli_num_rows($res)>0)
{
    $row=mysqli_fetch_array($res);

    $query_in = "insert into tbl_fee (mobile,month_start,month_end,amount,pay_via,payment_date) values ('$mobile','$nextmstart','$nextmend','$amount','$pay_method','$date')";
        if(mysqli_query($db_con,$query_in))
        {
            echo "Success";
        }
        else
        {
            echo "Try again";
        }
}
else
{
    echo "User Not found";
}

?>