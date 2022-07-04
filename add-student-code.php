
<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
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

$pic_name = $fname.rand(111, 999).$pic;
// var_dump($pic);
// exit();

include ("connection.php");
$query1 = "select * from tbl_student_details where mobile=$mobile";

$res1=mysqli_query($db_con,$query1);
    if(mysqli_num_rows($res1)>0)
    {
        header("location:add-student.php?msg=1");
    }
    else
    {
        if($pic_type=='image/png' or $pic_type=='image/jpg' or $pic_type=='image/jpeg')
        {
            if(move_uploaded_file($pic_tmp, 'assets/stu_pic/'.$pic_name))
            {
            
                $query="insert into tbl_student_details (fname, lname, mobile, email, gender, dob, pic,fee, present_address, permanent_address, enroll_date) values ('$fname','$lname','$mobile','$email','$gender','$dob', '$pic_name',$fee, '$present_address', '$permanent_address', '$enroll_date')";
            
                
                if(mysqli_query($db_con,$query))
                {
                    $query2="select * from tbl_student_details where mobile=$mobile";
                    if(mysqli_query($db_con,$query2))
                    {
                    echo $query2;
                    echo "Hello";
                    }
                    // header("location:students.php?msg=success");
                }else{
                    header("location:add-student.php?msg=queryError");    
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