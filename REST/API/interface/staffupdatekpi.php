<?php
// require_once ("../supportFunction.php");
// require_once ("../cache.php");
// require_once ("../connect.php");
// require_once ("../medoo.min.php");
// // Define Email and password
// $pcccempid = $_GET["jccempid"];
$ptblid = $_GET["jtblid"];
$pempid =  $_GET["jempid"];
$psr =  $_GET["jsr"];
$psrint = (int)$psr;
$pstatus = "Submitted";
// $pccevi = $_GET["jccevi"];
// $pccmstatus = $_GET["jfrstatus"];
//print_r ($email);
$datas = $database->update("tbl_kpi",[
"kpi_sr"=>$psrint
,"kpi_sr_status"=>$pstatus],
["tbl_kpiid"=>$ptblid]);
  // "AND" =>[

    // "emp_id" =>$pcccempid
  // ]
echo $database->last_query();

// $jsonResult = $datas;
// echo($datas);

	//["premise_type" => Restaurant]);
//$jsonResult = $datas;
// print_r($datas);
