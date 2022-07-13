<?php

require_once __DIR__ . '/vendor/autoload.php';


$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML("



    <h2 style='text-align:center;'>FEE RECEIPT</h2>

<div style='display:flex;background:green; width:70%;'>
    <img src='assets/img/logo-small.png' style='height:7rem;margin-bottom:1rem;'/>
    <br/>
    <span style='font-size:1rem;font-weight:bold;'>SOFTPRO LIBRARY HUB</span> <br/><br/><br/><br/>  
</div>


<div style='display:flex;background:green; width:20%;'>
    <img src='assets/stu_pic/dummy2.png' style='height:7rem;'/> <br/><br/>
    <span style='font-weight:bold;'>Riya Srivastava</span> <br/>
    <span>9120009291</span>
</div>

<div>
    <span style='text-acenter;'>YOUR FEE SUBMITTED SUCCESSFULLY !</span> <br/>

    <table border='1' cellspacing='0' style='width:100%;margin-top:1rem;'>
    <tr>
    <th>S.No.</th>
    <th>Amount</th>
    <th>Month Start</th>
    <th>Month End </th>
    <th>Payment Method</th>
    </tr>
    <tr>
    <td style='text-acenter;'>1.</td>
    <td style='text-align:center;'>1000</td>
    <td style='text-align:center;'>10/07/22</td>
    <td style='text-align:center;'>10/08/22</td>
    <td style='text-align:center;'>UPI</td>
    </tr>
    </table> 
</div>




");
$mpdf->Output('assets\receipt\test.pdf', 'I');
