<?php


$weather = $_GET["jweather"];
$datas = $database->select("tbl_activity", "*",["typ_weather"=>$weather]);
$jsonResult = $datas;
//print_r($datas);
