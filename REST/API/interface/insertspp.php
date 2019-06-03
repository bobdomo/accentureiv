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

$pname =  $_GET["uname"];
$pidnumber =  $_GET["pword"];


// Insert Statement Into tbl_emp


//Insert Statement into tbl_emp_details
$datas = $database->insert("user",
[
"user_id" => null,
"username" => $pname,
"password" => $pidnumber
]);
//print_r($datas);
