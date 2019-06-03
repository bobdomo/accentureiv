<?php
// require_once ("../supportFunction.php");
// require_once ("../cache.php");
// require_once ("../connect.php");
// require_once ("../medoo.min.php");
session_start();
$name = $_GET["company_name"];
$address = $_GET["company_address"];
$state = $_GET["company_state"];
$type = $_GET["industry_type"];
$officeno = $_GET["officeno"];
$faxno = $_GET["faxno"];
$pic = $_GET["pic"];
$hpno = $_GET["hpno"];
$email = $_GET["email"];
$status = $_GET["status"];
$date = $_GET["date"];
$action = $_GET["action"];

// $email =  $_GET["Remail"];
// $password = $_GET["Rpassword"];
// $stakeholder = $_GET["Rstakeholder"];
 // print_r($email);
// print_r($password);
//print_r($email ." ". $password ." ". $stakeholder);


// Define Email and password
$datas = $database->insert("company_details",
["name" => $name,
"address" => $address,
"state" => $state,
"type" => $type,
"offceno" => $officeno,
"faxno" => $faxno,
"pic" => $pic,
"hpno" => $hpno,
"email" => $email,
"status" => $status,
"date" => $date,
"action" => $action,
]);
// print_r($datas);
