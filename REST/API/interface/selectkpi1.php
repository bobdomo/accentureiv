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
$perspective = $_GET["jperspective"];
$pperspective = (string)$perspective;
// print_r($perspective);
// $password = $_GET["pword"];
//print_r ($email);


$datas = $database->select("tbl_kpi",["*"],[
"AND" =>[
"emp_id" => $pempid,
"perspective" => $pperspective
]
]);
$jsonResult = $datas;

	//["premise_type" => Restaurant]);
//$jsonResult = $datas;
//print_r($datas);
