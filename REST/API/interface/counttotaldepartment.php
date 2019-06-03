<?php

// $datas = $database->select("tbl_emp_details", "*");
// $jsonResult = $datas;
//print_r($datas);
$count = $database->count("tbl_department");
// echo $count;
$jsonResult = $count;


// echo "We have " . $count . " female users.";
