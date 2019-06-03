<?php
// require_once ("../supportFunction.php");
// require_once ("../cache.php");
// require_once ("../connect.php");
// require_once ("../medoo.min.php");



$pidnumber = $_GET["empid"];
$pcctext = $_GET["cctext"];
$pcctarget = $_GET["cctarget"];
$pccperiod = $_GET["ccperiod"];



// Insert Statement Into tbl_emp
$datas = $database->insert("tbl_cc",
["tbl_ccid" => "",
  "emp_id" => $pidnumber,
"cc_text" => $pcctext,
"cc_target" => $pcctarget,
"cc_period" => $pccperiod]);
//print_r($datas);

//Insert Statement into tbl_emp_details
// $datas = $database->insert("tbl_emp_details",
// ["emp_id" => $epidnumber,
// "emp_name" => $pname,
// "emp_position" => $pposition,
// "emp_jobgrade" => $pjobgrade,
// "emp_department" => $pdepartment,
// "emp_reporting" => $pmanager
// ]);
//print_r($datas);
