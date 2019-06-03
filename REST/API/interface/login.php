<?php
// require_once ("../supportFunction.php");
// require_once ("../cache.php");
// require_once ("../connect.php");
// require_once ("../medoo.min.php");
// // Define Email and password
// $username = $_GET('uname');
// $password = $_GET('password');
// session_start();
// $_SESSION['email']='email';
// $_SESSION['']='';
// $_SESSION['']='';
$email =  $_GET["email"];
$password = $_GET["password"];
//print_r ($email);
$datas = $database->select("tbl_user_details",["*"],[
"AND" =>[
"email" => $email,
"password" => $password
]
]);
$jsonResult = $datas;

	//["premise_type" => Restaurant]);
//$jsonResult = $datas;
//print_r($datas);
