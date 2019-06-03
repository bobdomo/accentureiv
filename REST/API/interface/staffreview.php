<?php
// require_once ("../supportFunction.php");
// require_once ("../cache.php");
// require_once ("../connect.php");
// require_once ("../medoo.min.php");
// // Define Email and password
$pcccempid = $_GET["jccempid"];
$pccidstring = $_GET["jccid"];
$pccid = (int)$pccidstring;
$pccsr =  $_GET["jccsr"];
$pccevi = $_GET["jccevi"];
$pccstatus = $_GET["jccstatus"];
//print_r ($email);
$datas = $database->update("tbl_cc",["cc_ssr"=>$pccsr,"cc_sevidence"=>$pccevi,"cc_sstatus"=>$pccstatus],["tbl_ccid"=>$pccid]);
  // "AND" =>[

    // "emp_id" =>$pcccempid
  // ]
echo $database->last_query();

// $jsonResult = $datas;
// echo($datas);

	//["premise_type" => Restaurant]);
//$jsonResult = $datas;
// print_r($datas);
