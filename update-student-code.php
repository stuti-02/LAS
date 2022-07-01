<?php

$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$enroll_date=$_POST['enroll_date'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$present_address=$_POST['present_address'];
$permanent_address=$_POST['permanent_address'];

$pic_name=$_FILES['pic']['name'];
$pic_type=$_FILES['pic']['type'];
$pic_tmp=$_FILES['pic']['tmp_name'];

$pic= $fname.rand(111,999).$pic_name;
// var_dump($pic_name);
// exit();

include ("connection.php");

if($pic_type=='image/jpg' or $pic_type='image/jpeg' or $pic_type='image/png')
{

}
else
{

}


$query = "update tbl_student_details set fname = '$fname', lname= '$lname', mobile = '$mobile', email = '$email', gender = '$gender', dob = '$dob', present_address = '$present_address',permanent_address = '$permanent_address' where stu_id = '$id'";
// echo $query;


?>