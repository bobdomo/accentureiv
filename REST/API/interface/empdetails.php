<?php
// require_once ("../supportFunction.php");
// require_once ("../cache.php");
// require_once ("../connect.php");
// require_once ("../medoo.min.php");

//$email =  $_GET["Remail"];
//$password = $_GET["Rpassword"];
//$stakeholder = $_GET["Rstakeholder"];
// print_r($email);
// print_r($password);
//print_r($email ." ". $password ." ". $stakeholder);

$pname =  $_GET["fname"];
$pidnumber =  $_GET["fidnumber"];
$pposition =  $_GET["fposition"];
$pjobgrade =  $_GET["fjobgrade"];
$pdepartment =  $_GET["fdepartment"];
$pmanager =  $_GET["fmanager"];
$pmanager2 =  $_GET["fmanager2"];
$pperiod =  $_GET["fperiod"];



// Insert Statement Into tbl_emp


//Insert Statement into tbl_emp_details
$datas = $database->insert("tbl_emp_details",
[
"tbl_emp_details_ID" => null,
"emp_id" => $pidnumber,
"emp_name" => $pname,
"emp_position" => $pposition,
"emp_jobgrade" => $pjobgrade,
"emp_department" => $pdepartment,
"emp_reporting" => $pmanager,
"emp_reporting2" => $pmanager2
]);
//print_r($datas);
