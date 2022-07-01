<?php
$fee_amt = $_POST['fee_amt'];

include('connection.php');

$query="insert into tbl_fee_mgmt (fee_amt,uploaded_date) values ('$fee_amt',curdate())";
$res=mysqli_query($db_con,$query);

if ($res)
{
header("Location:index.php?fee updated successfully");
}
else
{
header("Location:index.php? Something went wrong");
}
?>