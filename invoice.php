<?php
if(isset($_REQUEST['msg']))
{
    $get_phone=$_REQUEST['msg'];
}

include ("connection.php");
$query = "select * from tbl_fee_status where fs_mobile= '$get_phone'";
$res = mysqli_query($db_con,$query);
$row = mysqli_fetch_array($res);




require_once __DIR__ . '/vendor/autoload.php';


$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML("<div style='border:1px solid #000;padding:0.5rem;'>

<div style='width: 100%;'>
<table style='width: 100%;text-align:center;'>
    <tr>
        <td><h5>Date: ".$row['payment_date']."</h5></td>
        <td><h4>RECEIPT</h4></td>
        <td><h4>9455820748</h4></td>
    </tr>
</table>
</div><br/><br/>

<div style='width: 100%;text-align:center;'>
<img src='assets/img/logo-small.png' style='height: 70px; display:block;' alt=''>
<h2 style='text-align:center;'>SOFTPRO LIBRARY HUB</h2>
<h5>Softpro Tower, Near New Hanuman Temple <br/> Kapoorthala, Aliganj Lucknow - 226006</h5>
</div>

<div style='width: 100%;text-align:right;padding-right:1em;'>
<h5>Mobile : ".$row['fs_mobile']."</h5>
</div>



<div style='width: 100%;margin-bottom:1rem;'>
    <h5 style='text-align:center;'>YOUR FEE SUBMITTED SUCCESSFULLY !</h5>

    <table border='1' cellspacing='0' style='width:100%;margin-top:1rem;'>
    <tr>
    <th>Amount</th>
    <th>Month Start</th>
    <th>Month End </th>
    <th>Payment Method</th>
    </tr>
    <tr>
    <td style='text-align:center;'>".$row['fs_amount']."</td>
    <td style='text-align:center;'>".$row['fs_month_start']."</td>
    <td style='text-align:center;'>".$row['fs_month_end']."</td>
    <td style='text-align:center;'>".$row['pay_via']."</td>
    </tr>
    </table> 
</div>
</div>");
$mpdf->Output('assets\receipt\test.pdf', 'I');

