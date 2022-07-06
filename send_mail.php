<?php
session_start();
if($_SESSION['user']=='' or $_SESSION['user']==null){
  header("location:index.php?msg=loginfirst");
}


$getemail = $_REQUEST['email'];

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
$mail->addAddress($getemail); 
$mail->isHTML(true);  // Set email format to HTML
$bodyContent ="Fee Alert! <br/><br/>
Dear Student, <br/>
This is a gentle reminder that your's monthly library hub fee is due. Please attend to this matter as soon as you possible can.<br/><br/>

Thank You <br/>
Softpro Library Hub";

$mail->Subject = 'Fee Reminder ';
$mail->Body    = $bodyContent;

if($mail->Send())
{
    header("location:fee_list.php?msg=success");
}
else
{
    header("location:fee_list.php?msg=mailerror");
}