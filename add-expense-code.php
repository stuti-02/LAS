<?php
$date = $_POST["date"];
$name = $_POST["name"];
$amount = $_POST["amount"];

include ("connection.php");
$query = "insert into tbl_expense (expname,expamt,uploaded_date) values ('$name','$amount','$date')";
$res = mysqli_query($db_con,$query);

if($res)
{
    header("location:add-expense.php?msg=1");
}
else
{
    header("location:add-expense.php?msg=2");
}


?>