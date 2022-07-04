<?php
$name = $_POST["name"];
$mobile = $_POST["mobile"];
$amount = $_POST["amount"];
$pay_method = $_POST["pay_method"];
$date = $_POST["date"];



include ("connection.php");
$lentry = "select month_end from tbl_fee where mobile='$mobile' order by month_end limit 1";





$query = "select * from tbl_fee join tbl_student_details on tbl_fee.mobile=tbl_student_details.mobile where tbl_student_details.status='true' and tbl_fee.mobile='$mobile'";
// echo $query;
$res = mysqli_query($db_con,$query);

if(mysqli_num_rows($res)>0)
{
    $row=mysqli_fetch_array($res);
    if($row["mobile"]==$mobile && $row["name"]==$name)
    {
        $query_in = "insert into tbl_fee (mobile,month_start,month_end,amount,pay_via,payment_date) values ('$mobile','','','$amount','$pay_method','$date')";
    }
    else
    {
    echo "Not found";
    }
}
else
{
    echo "User Not found";
}

?>