
<?php
include ("connection.php");

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$present_address = $_POST['present_address'];
$permanent_address = $_POST['permanent_address'];
$enroll_date = $_POST['enroll_date'];
$pic=$_FILES['pic']['name'];
$pic_type=$_FILES['pic']['type'];
$pic_tmp=$_FILES['pic']['tmp_name'];
$fee= $_POST['fee'];
$pay_method= $_POST['pay_method'];
$aadhar=$_POST["aadhar"];

$aadhar_pic_temp=$_FILES['aadhar_pic']['name'];
$aadhar_pic_type=$_FILES['aadhar_pic']['type'];
$aadhar_pic_tmp=$_FILES['aadhar_pic']['tmp_name'];

$pic_name = $name.rand(111, 999).$pic;
$aadhar_pic = $name."-".$aadhar_pic_temp;

$month_end = date('Y-m-d', strtotime($enroll_date. ' +30 days'));


$query1 = "select * from tbl_student_details where mobile='$mobile' and status='true'";

$res1=mysqli_query($db_con,$query1);

    if(mysqli_num_rows($res1)>0)
    {
        header("location:add-student.php?msg=3");
    }
    else
    {
        if(($pic_type=='image/png' or $pic_type=='image/jpg' or $pic_type=='image/jpeg') and ($aadhar_pic_type=='image/png' or $aadhar_pic_type=='image/jpg' or $aadhar_pic_type=='image/jpeg'))
        {
            if(move_uploaded_file($pic_tmp, 'assets/stu_pic/'.$pic_name) and move_uploaded_file($aadhar_pic_tmp, 'assets/aadhar_pic/'.$aadhar_pic))
            {

                $query="insert into tbl_student_details (name, mobile, email, gender, dob, pic,aadhar,aadhar_pic,fee,pay_method, present_address, permanent_address, enroll_date,status) values ('$name','$mobile','$email','$gender','$dob','$pic_name','$aadhar','$aadhar_pic','$fee','$pay_method','$present_address', '$permanent_address', '$enroll_date','true')";
                
                 $query2="insert into tbl_fee (mobile,month_start,month_end,amount,payment_date,pay_via) values ('$mobile','$enroll_date','$month_end','$fee',CURRENT_DATE(),'$pay_method')";
                 
                 $query3="insert into tbl_fee_status (fs_mobile,fs_month_start,fs_month_end,fs_amount) values ('$mobile','$enroll_date','$month_end','$fee')";
                    
                 if(mysqli_query($db_con,$query2) and mysqli_query($db_con,$query) and mysqli_query($db_con,$query3))
                    {
                        header("location:add-student.php?msg=1");
                    }
                  else
                    {
                        header("location:add-student.php?msg=2");
                    }
                
                
            }
            else{
                header("location:add-student.php?msg=3");
            }
        }
        else{
            header("location:add-student.php?msg=4");
        }
    }


?>