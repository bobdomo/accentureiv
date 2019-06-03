<?php

$state = $_GET["jstate"];
$enviroment = $_GET["jenviroment"];
$typeweather = $_GET["typeweather"];
$activity = $_GET["activity"];
$hotelname = $_GET["hotelname"];
// $orgname = $_GET["enviro"]
// echo $fullname;
// echo $orgname;
// echo $email;
// echo $password;

// Insert Statement Into tbl_emp
$datas = $database->insert("tbl_hotel_details",
[
  "org_name" => $hotelname,
"state" => $state,
"activity_offered" => $activity,
"weather" => $typeweather,
"enviroment" => $enviroment]);
// print_r($datas);
