<?php
// require_once ("../supportFunction.php");
// require_once ("../cache.php");
// require_once ("../connect.php");
// require_once ("../medoo.min.php");

//$email =  $_GET["Remail"];
//$password = $_GET["Rpassword"];
//$stakeholder = $_GET["Rstakeholder"];
// print_r($email);
// print_r($password);
//print_r($email ." ". $password ." ". $stakeholder);

$pspcorecode =  $_GET["jspcorecode"];
$pstrageycode =  $_GET["jstrategycode"];
$pstrategy =  $_GET["jstrategy"];
// print_r($pspcorecode);
// print_r($pstrategycode);
// print_r($pstrategy);



$datas = $database->insert("tbl_sp2",
[
"tbl_sp2id" => null,
"sp_core_code" => $pspcorecode,
"sp_strategy_code" => $pstrategycode,
"sp_strategy" => $pstrategy]);
print_r($datas);
