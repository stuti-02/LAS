
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

$aadhar_pic=$_FILES['aadhar_pic']['name'];
$aadhar_pic_type=$_FILES['aadhar_pic']['type'];
$aadhar_pic_tmp=$_FILES['aadhar_pic']['tmp_name'];

$pic_name = $name.rand(111, 999).$pic;


$month_end = date('Y-m-d', strtotime($enroll_date. ' +30 days'));


$query1 = "select * from tbl_student_details where mobile='$mobile' and status='true'";

$res1=mysqli_query($db_con,$query1);

    if(mysqli_num_rows($res1)>0)
    {
        header("location:add-student.php?msg=3");
    }
    else
    {
        if($pic_type=='image/png' or $pic_type=='image/jpg' or $pic_type=='image/jpeg')
        {
            if((move_uploaded_file($pic_tmp, 'assets/stu_pic/'.$pic_name)))
            {

                $query="insert into tbl_student_details (name, mobile, email, gender, dob, pic,aadhar,aadhar_pic,fee,pay_method, present_address, permanent_address, enroll_date,status) values ('$name','$mobile','$email','$gender','$dob','$pic_name','$aadhar','$aadhar_pic','$fee','$pay_method','$present_address', '$permanent_address', '$enroll_date','true')";

                
                 $query2="insert into tbl_fee (mobile,month_start,month_end,amount,pay_via) values ('$mobile','$enroll_date','$month_end','$fee','$pay_method')";
                    
                 if(mysqli_query($db_con,$query2) && mysqli_query($db_con,$query))
                    {
                        header("location:add-student.php?msg=1");
                    }
                  else
                    {
                        header("location:add-student.php?msg=2");
                    }
                
                
            }
            else{
                header("location:add-student.php?msg=imgError");
            }
        }
        else{
            header("location:add-student.php?msg=typeError");
        }
    }


?>