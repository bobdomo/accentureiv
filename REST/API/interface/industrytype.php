<?php
//
$datas = $database->select("company_details", "*");
$jsonResult = $datas;
// session_start();
// $type = $_GET["type1"];
// $datas = $database->select("company_details", ["*"],"type" => $type);
// $jsonResult = $datas;
//print_r($datas);
