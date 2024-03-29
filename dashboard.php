<?php

session_start();
if($_SESSION['user']=='' or $_SESSION['user']==null){
  header("location:index.php?msg=loginfirst");
}

include ("connection.php");
$query_stu = "select count(name) from tbl_student_details where status='T'";
$res_stu=mysqli_query($db_con,$query_stu);
$row_stu=mysqli_fetch_array($res_stu);

$query_male="select count(name) from tbl_student_details where gender='male' and status='T'";
$res_male = mysqli_query($db_con,$query_male);
$row_male= mysqli_fetch_array($res_male);

$query_female="select count(name) from tbl_student_details where gender='female' and status='T'";
$res_female = mysqli_query($db_con,$query_female);
$row_female= mysqli_fetch_array($res_female);

$query_present = "select count(mobile) from tbl_attendance where date=CURRENT_DATE() and status='Present'";
$res_present=mysqli_query($db_con,$query_present);
$row_present=mysqli_fetch_array($res_present);

$query_fee = "select * from tbl_student_details join tbl_fee on tbl_student_details.mobile=tbl_fee.mobile where tbl_student_details.status='T' order by tbl_fee.fee_id desc limit 5";
$res_fee = mysqli_query($db_con,$query_fee);



$query_redz = "select * from tbl_fee_status as tf join tbl_student_details as tsd on tf.fs_mobile= tsd.mobile where tsd.status='T' order by tf.fs_month_end";
$res_redz = mysqli_query($db_con,$query_redz);




$q_curdate = "select CURRENT_DATE()";
$res_curdate = mysqli_query($db_con, $q_curdate);
$row_curdate = mysqli_fetch_array($res_curdate);


// ===========================Graph 2 Queries============================================

$q_date = "select distinct date from tbl_attendance order by date desc limit 17";
$res_date = mysqli_query($db_con, $q_date);


$res_date1 = mysqli_query($db_con, $q_date);
$p_output = '';
while($row_row1 = mysqli_fetch_assoc($res_date1)){
  $t_date = $row_row1['date'];
  $q_present = "select count(*) from tbl_attendance where date = '$t_date' and status='Present'";
  $res_pre = mysqli_query($db_con, $q_present);
  $row_pre = mysqli_fetch_array($res_pre);
  $p_output .= $row_pre[0].",";
}

$res_date2 = mysqli_query($db_con, $q_date);
$ab_output = '';
while($row_row2 = mysqli_fetch_assoc($res_date2)){
  $ta_date = $row_row2['date'];
  $q_absent = "select count(*) from tbl_attendance where date = '$ta_date' and status='Absent'";
  $res_abs = mysqli_query($db_con, $q_absent);
  $row_abs = mysqli_fetch_array($res_abs);
  $ab_output .= $row_abs[0].",";

}
//===============================Graph1 Queries=========================

$q_date_fc = "select distinct uploaded_date as uploaded_date from tbl_expense order by uploaded_date desc limit 7";
$res_date_fc = mysqli_query($db_con, $q_date_fc);


$res_collection = mysqli_query($db_con,$q_date_fc);
$collection = '';
while($row_collection = mysqli_fetch_array($res_collection))
{
$up_date=$row_collection["uploaded_date"];
$q_collection = "select sum(amount) from tbl_fee where payment_date = '$up_date'";
$res_col = mysqli_query($db_con,$q_collection);
$row_col = mysqli_fetch_array($res_col);
$collection .= $row_col[0].",";
}

$exp = '';
$res_collection2 = mysqli_query($db_con,$q_date_fc);
while($row_collection2 = mysqli_fetch_array($res_collection2))
{
$up_date2=$row_collection2["uploaded_date"];
echo $q_exp = "select sum(expamt) from tbl_expense where uploaded_date = '$up_date2'";
$res_exp = mysqli_query($db_con,$q_exp);
$row_exp = mysqli_fetch_array($res_exp);
$exp .= $row_exp[0].",";
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <title>Softpro Library Hub : : Home</title>

    <link rel="shortcut icon" href="assets/img/favicon.png" />

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap"
    />

    <link
      rel="stylesheet"
      href="assets/plugins/bootstrap/css/bootstrap.min.css"
    />

    <link
      rel="stylesheet"
      href="assets/plugins/fontawesome/css/fontawesome.min.css"
    />
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css" />

    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <div class="main-wrapper">
      
    <?php
    include ("home_include/sidebar.php");
    
    ?>



      <div class="page-wrapper">
        <div class="content container-fluid">
          <div class="page-header">
            <div class="row">
              <div class="col-sm-12">
                <h3 class="page-title">Welcome Admin!</h3>
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active">Dashboard</li>
                </ul>
              </div>
            </div>
          </div>

          
          <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
              <div class="card bg-one w-100">
                <div class="card-body">
                  <div
                    class="db-widgets d-flex justify-content-between align-items-center"
                  >
                    <div class="db-icon">
                      <i class="fas fa-user-graduate"></i>
                    </div>
                    <div class="db-info">
                      <h3 class="text-end"><?php echo $row_stu[0]; ?></h3>
                      <h6 class="text-end">Total Students</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
              <div class="card bg-two w-100">
                <div class="card-body">
                  <div
                    class="db-widgets d-flex justify-content-between align-items-center"
                  >
                    <div class="db-icon">
                      <i class="fa fa-user"></i>
                    </div>
                    <div class="db-info">
                      <h3 class="text-end"><?php echo $row_male[0]; ?></h3>
                      <h6 class="text-end">Male Students</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
              <div class="card bg-three w-100">
                <div class="card-body">
                  <div
                    class="db-widgets d-flex justify-content-between align-items-center"
                  >
                    <div class="db-icon">
                      <i class="fa fa-user"></i>
                    </div>
                    <div class="db-info">
                      <h3 class="text-end"><?php echo $row_female[0]; ?></h3>
                      <h6 class="text-end">Female Students</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
              <div class="card bg-four w-100">
                <div class="card-body">
                  <div
                    class="db-widgets d-flex justify-content-between align-items-center"
                  >
                    <div class="db-icon">
                      <i class="fa fa-users"></i>
                    </div>
                    <div class="db-info">
                      <h3 class="text-end"><?Php echo $row_present[0]; ?></h3>
                      <h6 class="text-end">Today Present Students</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 col-lg-6">
              <div class="card card-chart">
                <div class="card-header">
                  <div class="row align-items-center">
                    <div class="col-6">
                      <h5 class="card-title">Revenue</h5>
                    </div>
                    <div class="col-6">
                      <ul class="list-inline-group text-end mb-0 pl-0">
                        <li class="list-inline-item">
                          <div class="form-group mb-0 amount-spent-select">
                            <select
                              class="form-control form-control-sm form-select"
                            >
                              <option>Today</option>
                              <option>Last Week</option>
                              <option>Last Month</option>
                            </select>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div id="apexcharts-area"></div>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-6">
              <div class="card card-chart">
                <div class="card-header">
                  <div class="row align-items-center">
                    <div class="col-6">
                      <h5 class="card-title">Recent Attendance</h5>
                    </div>
                    <div class="col-6">
                      
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div id="bar"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 d-flex">
              <div class="card flex-fill">
                <div class="card-header">
                  <h5 class="card-title">Recent Fees</h5>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-center">
                      <thead class="thead-light">
                        <tr>
                          <th>S.No.</th>
                          <th>Name</th>
                          <th class="text-center">Amount</th>
                          <th class="text-center">Payment Method</th>
                          <th class="text-center">Month Start</th>
                          <th class="text-center">Month End</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $a=1;
                          while($row_fee=mysqli_fetch_array($res_fee))
                          {
                        ?>
                            <tr>
                            <td><?php echo $a; ?></td>
                            <td class="text-nowrap"><?php echo $row_fee["name"]; ?></td>
                            <td class="text-nowrap"><?php echo $row_fee["amount"]; ?></td>
                            <td class="text-center"><?php echo $row_fee["pay_method"]; ?></td>
                            <td class="text-center"><?php echo $row_fee["month_start"]; ?></td>
                            <td class="text-end">
                            <?php echo $row_fee["month_end"]; ?>
                            </td>
                          </tr>
                        <?php
                          $a++;
                          }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex">
              <div class="card flex-fill">
                <div class="card-header">
                  <h5 class="card-title">Red Zone Students</h5>
                </div>
                <div class="card-body">
                    <table class="table table-hover table-center">
                      <thead class="thead-light">
                        <tr>
                          <th class="text-center">S.No.</th>
                          <th class="text-center">Name</th>
                          <th class="text-center">Mobile</th>
                          <th class="text-center">Gender</th>
                          <th class="text-center">Fee Due Date</th>
                          <th class="text-center">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          
                          while($row_redz=mysqli_fetch_array($res_redz))
                          {
                            $monthend= $row_redz["fs_month_end"];
                            $mend=date('Y-m-d',(strtotime ( '-2 day' , strtotime ( $monthend) ) ));
                            $a1=1;
                            if($row_curdate[0]>$mend)
                            {
                         ?>
                            <tr>
                             <td class="text-center"><?php echo $a1; ?></td>
                             <td class="text-center"><?php echo $row_redz["name"]; ?></td>
                             <td class="text-center"><?php echo $row_redz["mobile"]; ?></td>
                             <td class="text-center"><?php echo $row_redz["gender"]; ?></td>
                             <td class="text-center"><?php echo $row_redz["fs_month_end"]; ?></td>
                             <td class="text-center">
                               <a href="send_mail.php?email=<?php echo $row_redz["email"]; ?>" class="btn btn-rounded btn-outline-danger">Send Mail</a>
                             </td>
                           </tr>
                         <?php                     
                            }
                            $a1++;
                          }
                        ?>
                      </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
          
          

        </div>

      </div>
    </div>


    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
    <!-- <script src="assets/plugins/apexchart/chart-data.js"></script> -->

    <script src="assets/js/script.js"></script>

    <script>
      'use strict';

$(document).ready(function() {

	// Area chart

	if ($('#apexcharts-area').length > 0) {
	var options = {
		chart: {
			height: 350,
			type: "area",
			toolbar: {
				show: false
			},
		},
		dataLabels: {
			enabled: false
		},
		stroke: {
			curve: "smooth"
		},
		series: [{
			name: "Collection",
			data: [
      <?php
      echo $collection;
      ?>]
		}, {
			name: "Expense",
			color: '#FFBC53',
			data: [
        <?php
          echo $exp;
          ?>
      ]
		}],
		xaxis: {
			categories: [
        <?php
        while($row_date_fc = mysqli_fetch_array($res_date_fc)){
        echo "'".$row_date_fc['uploaded_date']."',";
        }    
        ?>
      ],
		}
	}
	var chart = new ApexCharts(
		document.querySelector("#apexcharts-area"),
		options
	);
	chart.render();
	}


	// Bar chart
	
	if ($('#bar').length > 0) {
	var optionsBar = {
		chart: {
			type: 'bar',
			height: 350,
			width: '100%',
			stacked: true,
			toolbar: {
				show: false
			},
		},
		dataLabels: {
			enabled: false
		},
		plotOptions: {
			bar: {
				columnWidth: '45%',
			}
		},
		series: [{
			name: "Presents",
			color: '#fdbb38',
			data: [
        <?php
          echo $p_output;
          ?>
      ],
		}, {
			name: "Absent",
			color: '#19affb',
			data: [
        <?php
          echo $ab_output;
          ?>
      ],
		}],
		labels: [     
      <?php
      while($row_date = mysqli_fetch_array($res_date)){
      echo "'".$row_date['date']."',";
      }    
      ?>
    ],
		xaxis: {
			labels: {
				show: false
			},
			axisBorder: {
				show: false
			},
			axisTicks: {
				show: false
			},
		},
		yaxis: {
			axisBorder: {
				show: false
			},
			axisTicks: {
				show: false
			},
			labels: {
				style: {
					colors: '#777'
				}
			}
		},
		title: {
			text: '',
			align: 'left',
			style: {
				fontSize: '18px'
			}
		}

	}
  
	var chartBar = new ApexCharts(document.querySelector('#bar'), optionsBar);
	chartBar.render();
	}
  
});
    </script>
  </body>

  </html>
