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

$pperspective =  $_GET["jperspective"];
$pkpi =  $_GET["jkpi"];
$pempid =  $_GET["jempid"];
$pweightage = $_GET["jweightage"];
// $pcorenew =  $_GET["jcorenew"];
// print_r($pperspective);
// print_r($pkpi);
// print_r($pempid);

// Insert Statement Into tbl_emp


//Insert Statement into tbl_emp_details
$datas = $database->insert("tbl_kpi",
[
"tbl_kpiid" => null,
"perspective" => $pperspective,
"kpi" => $pkpi,
"emp_id" => $pempid,
"kpi_weightage" => $pweightage
]);
//print_r($datas);
