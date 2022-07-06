<?php

$id=$_POST['id'];
$name=$_POST['name'];
// $lname=$_POST['lname'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$enroll_date=$_POST['enroll_date'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$aadhar=$_POST['aadhar'];
$present_address=$_POST['present_address'];
$permanent_address=$_POST['permanent_address'];

$pic_name=$_FILES['pic']['name'];
$pic_type=$_FILES['pic']['type'];
$pic_tmp=$_FILES['pic']['tmp_name'];

var_dump($_FILES['pic']);

$aadhar_pic_name=$_FILES['aadhar_pic']['name'];
$aadhar_pic_type=$_FILES['aadhar_pic']['type'];
$aadhar_pic_tmp=$_FILES['aadhar_pic']['tmp_name'];

$pic= $name.rand(111,999).$pic_name;
$aadhar_pic= $name.rand(111,999).$aadhar_pic_name;
// var_dump($pic_name);
// exit();

include ("connection.php");

if(strlen($_FILES['pic']['name'])==0 and strlen($_FILES['aadhar_pic']['name'])==0){

    $query = "update tbl_student_details set name = '$name', mobile = '$mobile', aadhar='$aadhar',  email = '$email', gender = '$gender', dob = '$dob', present_address = '$present_address', permanent_address = '$permanent_address' where stu_id = '$id'";
    // echo $query;
    mysqli_query($db_con, $query);
    header("location:students.php?msg=updated"); 
    // echo "Koi photo nhi aa rhi hai";


}elseif(strlen($_FILES['pic']['name'])>0 and strlen($_FILES['aadhar_pic']['name'])==0){
   
    $q_fetch = "select pic from tbl_student_details where stu_id='$id'";
    $res_fetch = mysqli_query($db_con, $q_fetch);
    $row_fetch = mysqli_fetch_assoc($res_fetch);
    $fetch_pic = $row_fetch['pic'];
    if(unlink('assets/stu_pic/'.$fetch_pic))
    {
        
        if($pic_type=='image/jpg' or $pic_type='image/jpeg' or $pic_type='image/png')
        {
            if(move_uploaded_file($pic_tmp, 'assets/stu_pic/'.$pic_name)){
                            
                $query = "update tbl_student_details set name = '$name', mobile = '$mobile', aadhar='$aadhar',  email = '$email', gender = '$gender', pic= '$pic_name',  dob = '$dob', present_address = '$present_address', permanent_address = '$permanent_address' where stu_id = '$id'";
                // echo $query;
                mysqli_query($db_con, $query);
                header("location:students.php?msg=updated"); 

            }else{
                header("location:students.php?msg=uploaderror");   
            }
        }
        else
        {
            header("location:students.php?msg=typeerror");
        }
    }

    else
    {
        header("location:students.php?msg=tryagain");
    }

    // echo "Sirf Lounda ki photo aa rhi hai";
    
}elseif(strlen($_FILES['pic']['name'])==0 and strlen($_FILES['aadhar_pic']['name'])>0){

    $q_fetch = "select aadhar_pic from tbl_student_details where stu_id='$id'";
    $res_fetch = mysqli_query($db_con, $q_fetch);
    $row_fetch = mysqli_fetch_assoc($res_fetch);
    $fetch_pic = $row_fetch['aadhar_pic'];
    if(unlink('assets/aadhar_pic/'.$fetch_pic))
    {
        
        if($pic_type=='image/jpg' or $pic_type='image/jpeg' or $pic_type='image/png')
        {
            if(move_uploaded_file($aadhar_pic_tmp, 'assets/aadhar_pic/'.$aadhar_pic)){
                            
                $query = "update tbl_student_details set name = '$name', mobile = '$mobile', aadhar='$aadhar',  email = '$email', gender = '$gender', aadhar_pic= '$aadhar_pic',  dob = '$dob', present_address = '$present_address', permanent_address = '$permanent_address' where stu_id = '$id'";
                // echo $query;
                mysqli_query($db_con, $query);
                header("location:students.php?msg=updated"); 

            }else{
                header("location:students.php?msg=uploaderror");   
            }
        }
        else
        {
            header("location:students.php?msg=typeerror");
        }
    }
    else
    {
        header("location:students.php?msg=tryagain");
    }

//    echo "Sift AAdhar AAA rha hai";

}elseif(strlen($_FILES['pic']['name'])>0 and strlen($_FILES['aadhar_pic']['name'])>0){

//   echo "Sab Dhara hai";
$q_fetch = "select pic, aadhar_pic from tbl_student_details where stu_id='$id'";
$res_fetch = mysqli_query($db_con, $q_fetch);
$row_fetch = mysqli_fetch_assoc($res_fetch);
$fetch_pic = $row_fetch['pic'];
$fetch_aadhar_pic = $row_fetch['aadhar_pic'];
    if( (unlink('assets/aadhar_pic/'.$fetch_aadhar_pic)) and (unlink('assets/stu_pic/'.$fetch_pic)))
    {
        
        if(($pic_type=='image/jpg' or $pic_type='image/jpeg' or $pic_type='image/png') and ($aadhar_pic_type=='image/jpg' or $aadhar_pic_type='image/jpeg' or $aadhar_pic_type='image/png'))
        {
            if(move_uploaded_file($pic_tmp, 'assets/stu_pic/'.$pic_name) and move_uploaded_file($aadhar_pic_tmp, 'assets/aadhar_pic/'.$aadhar_pic)){
                            
                $query = "update tbl_student_details set name = '$name', mobile = '$mobile', aadhar='$aadhar',  email = '$email', gender = '$gender', pic='$pic_name', aadhar_pic= '$aadhar_pic',  dob = '$dob', present_address = '$present_address', permanent_address = '$permanent_address' where stu_id = '$id'";
                // echo $query;
                mysqli_query($db_con, $query);
                header("location:students.php?msg=updated"); 

            }else{
                header("location:students.php?msg=uploaderror");   
            }
        }
        else
        {
            header("location:students.php?msg=typeerror");
        }
    }
    else
    {
        header("location:students.php?msg=tryagain");
    }

}


?>