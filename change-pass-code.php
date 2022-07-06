<?php

include("connection.php");

$old_pass = $_POST["old_pass"];
$new_pass = $_POST["new_pass"];
$confirm_pass = $_POST["confirm_pass"];

$query="select * from tbl_admin";
$res=mysqli_query($db_con,$query);

if(mysqli_num_rows($res)>0)
{
    $row = mysqli_fetch_array($res);
    if($old_pass==$new_pass)
    {
        header("location:admin_profile.php?msg=1");
        // echo "Old and New Passwords are same";
    }
    elseif("$row[ad_pass]"!=$old_pass)
    {
        header("location:admin_profile.php?msg=2");
        // echo "Old password is wrong";
    }
    elseif($new_pass!=$confirm_pass)
    {
        header("location:admin_profile.php?msg=3");
        // echo "new and confirm passwords are not same";
    }
    elseif($new_pass==$confirm_pass)
    {
        $update_query = "update tbl_admin set ad_pass='$new_pass'";
        mysqli_query($db_con,$update_query);
        header("location:admin_profile.php?msg=4");
    }
    else
    {
        header("location:admin_profile.php?msg=5");
    }
}
?>