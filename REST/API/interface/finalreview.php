<?php
// require_once ("../supportFunction.php");
// require_once ("../cache.php");
// require_once ("../connect.php");
// require_once ("../medoo.min.php");
// // Define Email and password
// $pcccempid = $_GET["jccempid"];
$pccidstring = $_GET["jccfrid"];
$pccid = (int)$pccidstring;
$pccmar =  $_GET["jfr"];
// $pccevi = $_GET["jccevi"];
$pccmstatus = $_GET["jfrstatus"];
//print_r ($email);
$datas = $database->update("tbl_cc",["cc_mfr"=>$pccmar,"cc_mastatus"=>$pccmstatus],["tbl_ccid"=>$pccid]);
  // "AND" =>[

    // "emp_id" =>$pcccempid
  // ]
echo $database->last_query();

// $jsonResult = $datas;
// echo($datas);

	//["premise_type" => Restaurant]);
//$jsonResult = $datas;
// print_r($datas);
