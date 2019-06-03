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

//$pname =  $_GET["fname"];
$pidnumber =  $_GET["fidnumber"];
//$pposition =  $_GET["fposition"];
//$pjobgrade =  $_GET["fjobgrade"];
//$pdepartment =  $_GET["fdepartment"];
//$pmanager =  $_GET["fmanager"];
//$pperiod =  $_GET["fperiod"];
$pemail =  $_GET["femail"];
$ppasword =  $_GET["fpassword"];
$prole =  $_GET["frole"];



// Insert Statement Into tbl_emp
$datas = $database->insert("tbl_emp",
["tbl_empid" => "",
  "emp_id" => $pidnumber,
"email" => $pemail,
"password" => $ppasword,
"roles" => $prole]);
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
