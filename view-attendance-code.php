<?php
$start_date=$_POST["start_date"];
$end_date=$_POST["end_date"];

$query= "select * from tbl_attendance where date range($start_date,$end_date)";
echo $query;
?>