<?php

$name = $_POST["name"];
$mobile = $_POST["mobile"];
$amount = $_POST["amount"];
$pay_method = $_POST["pay_method"];
$date = $_POST["date"];



include ("connection.php");
$mend = "select month_end from tbl_fee where mobile='$mobile' order by month_end desc limit 1";
$res_mend=mysqli_query($db_con,$mend);
$row_mend=mysqli_fetch_array($res_mend);
$monthend= $row_mend[0];
$nextmstart =date('Y-m-d',(strtotime ( '+1 day' , strtotime ( $monthend) ) ));
$nextmend = date('Y-m-d', strtotime($nextmstart. ' +30 days'));


$query = "select * from tbl_fee join tbl_student_details on tbl_fee.mobile=tbl_student_details.mobile where tbl_student_details.status='T' and tbl_fee.mobile='$mobile'";
$res = mysqli_query($db_con,$query);

$query_mail = "select email from tbl_student_details where mobile='$mobile' and status='T'";

$res_mail = mysqli_query($db_con,$query_mail);
$row_mail= mysqli_fetch_array($res_mail);
$my_mail=$row_mail[0];


if(mysqli_num_rows($res)>0)
{
    $row=mysqli_fetch_array($res);

    $query_in = "insert into tbl_fee (mobile,month_start,month_end,amount,pay_via,payment_date) values ('$mobile','$nextmstart','$nextmend','$amount','$pay_method','$date')";

    $query_update = "update tbl_fee_status set fs_month_start='$nextmstart', fs_month_end='$nextmend', fs_amount='$amount' where fs_mobile='$mobile'";


        if(mysqli_query($db_con,$query_in) and mysqli_query($db_con,$query_update))
        {
                        

            require 'PHPMailer/PHPMailerAutoload.php';

            $mail = new PHPMailer;

            $mail->Host = 'smtpout.secureserver.net'; // Set mailer to use SMTP
            $mail->SMTPAuth = true;                            // Enable SMTP authentication
            $mail->Username = 'hr@softproindia.in';          // SMTP username
            $mail->Password = 'hr@spi123'; // SMTP password
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;
            $mail->setFrom('hr@softproindia.in', 'Softpro India, Lucknow');
            $mail->addReplyTo('hr@softproindia.in', 'Softpro India, Lucknow');
            $mail->addAddress($my_mail);
            $mail->isHTML(true);  // Set email format to HTML
            $bodyContent ="Dear Student, <br/>
            Your Fee is Submitted Succesfully.<br/><br/>

            Thank You <br/>
            Softpro Library Hub";

            $mail->Subject = 'Fee Submitted Succesfully';
            $mail->Body    = $bodyContent;

            if($mail->Send()){
            // echo "Success";
            header("location:add-fee.php?msg=success");
            }else{
                header("location:add-fee.php?msg=mailerror");
                
            }
        }
        else
        {
            header("location:add-fee.php?msg=error");
        }
}
else
{
    header("location:add-fee.php?msg=user-error");
    // echo "User Not found";
}

?>