<?php

$id = $_GET["id"];
$datas = $database->select("tbl_hotel_details", "*",["h_id"=>$id]);
$jsonResult = $datas;
//print_r($datas);
