<?php

$datas = $database->select("tbl_emp_details",[
"[>]tbl_emp"=>["emp_id" => "emp_id"]],["tbl_emp_details.emp_id","tbl_emp_details.emp_name","tbl_emp_details.emp_department","tbl_emp.roles"]);
$jsonResult = $datas;
//print_r($datas);
