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
$pempid =  $_GET["empid"];
// $password = $_GET["pword"];
//print_r ($email);
$datas = $database->select("tbl_emp_details",["*"],[
"AND" =>[
"emp_id" => $pempid
]
]);
$jsonResult = $datas;

	//["premise_type" => Restaurant]);
//$jsonResult = $datas;
//print_r($datas);
