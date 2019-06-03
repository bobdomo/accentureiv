<?php

$pempid = $_GET["empid"];

$datas = $database->select("tbl_emp_details", "*",["emp_id"=>$pempid]);
$jsonResult = $datas;
//print_r($datas);
