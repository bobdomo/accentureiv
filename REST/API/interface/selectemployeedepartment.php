<?php


$pdpt = $_GET["jdpt"];
$datas = $database->select("tbl_emp_details", "*",["emp_department"=>$pdpt]);
$jsonResult = $datas;
//print_r($datas);
