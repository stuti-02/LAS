<?php

$email= $_POST["email"];
$pass= $_POST["pass"];

include ("connection.php");
$query = "select * from tbl_admin where ad_email='$email' and ad_pass='$pass'";

$res = mysqli_query($db_con,$query);

if(mysqli_num_rows($res)>0)
{
    session_start();
    $_SESSION['user'] = $email;
    
    header("location:dashboard.php");
}
else
{
    header("location:index.php?msg=1");
}

?>
