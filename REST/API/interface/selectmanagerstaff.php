<?php
// require_once ("../supportFunction.php");
// require_once ("../cache.php");
// require_once ("../connect.php");
// require_once ("../medoo.min.php");
// // Define Email and password
// $username = $_GET('uname');
// $password = $_GET('password');


// $_SESSION['']='';
// $_SESSION['']='';
$pmname =  $_GET["mname"];
// $password = $_GET["pword"];
//print_r ($email);
$datas = $database->select("tbl_emp_details",["*"],[
"AND" =>[
"emp_reporting" => $pmname
]
]);
$jsonResult = $datas;

	//["premise_type" => Restaurant]);
//$jsonResult = $datas;
//print_r($datas);
