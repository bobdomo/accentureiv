<?php
// require_once ("../supportFunction.php");
// require_once ("../cache.php");
// require_once ("../connect.php");
// require_once ("../medoo.min.php");
// // Define Email and password
// $pcccempid = $_GET["jccempid"];
$ptblid = $_GET["jtblid"];
$pempid =  $_GET["jempid"];
$pbase =  $_GET["jbase"];
$pbaseint = (int)$pbase;
$ptarget =  $_GET["jtarget"];
$ptargetint = (int)$ptarget;
$pstretch =  $_GET["jstretch"];
$pstretchint = (int)$pstretch;
$puom =  $_GET["juom"];
$pmethod =  $_GET["jmethod"];
// $pccevi = $_GET["jccevi"];
// $pccmstatus = $_GET["jfrstatus"];
//print_r ($email);
$datas = $database->update("tbl_kpi",[
"kpi_base"=>$pbaseint
,"kpi_target"=>$ptargetint
,"kpi_stretch"=>$pstretchint
,"kpi_uom"=>$puom
,"kpi_methodology"=>$pmethod],
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
