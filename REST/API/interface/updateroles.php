<?php
// require_once ("../supportFunction.php");
// require_once ("../cache.php");
// require_once ("../connect.php");
// require_once ("../medoo.min.php");
// // Define Email and password
$pempid = $_GET["jempid"];
$puroles = $_GET["juroles"];
// $pccid = (int)$pccidstring;
// $pccsr =  $_GET["jccsr"];
// $pccevi = $_GET["jccevi"];
// $pccstatus = $_GET["jccstatus"];
//print_r ($email);
$datas = $database->update("tbl_emp",["roles"=>$puroles],["emp_id"=>$pempid]);
  // "AND" =>[

    // "emp_id" =>$pcccempid
  // ]
echo $database->last_query();

// $jsonResult = $datas;
// echo($datas);

	//["premise_type" => Restaurant]);
//$jsonResult = $datas;
// print_r($datas);
