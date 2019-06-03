<?php
// require_once ("../supportFunction.php");
// require_once ("../cache.php");
// require_once ("../connect.php");
// require_once ("../medoo.min.php");
// // Define Email and password
// $pcccempid = $_GET["jccempid"];
$pempidstring = $_GET["jempid"];
$pempid = (int)$pempidstring;
$ppassword  =  $_GET["jpwd"];
// $pccevi = $_GET["jccevi"];
// $pccmstatus = $_GET["jfrstatus"];
//print_r ($email);
$datas = $database->update("tbl_emp",["password"=>$ppassword],["emp_id"=>$pempidstring]);
  // "AND" =>[

    // "emp_id" =>$pcccempid
  // ]
// echo $database->last_query();

// $jsonResult = $datas;
// echo($datas);

	//["premise_type" => Restaurant]);
//$jsonResult = $datas;
// print_r($datas);
