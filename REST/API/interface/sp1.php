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

$x =  $_GET["xval"];
$y =  $_GET["yvala"];
$total =  $_GET["totalval"];
// $pcorenew =  $_GET["jcorenew"];



// Insert Statement Into tbl_emp


//Insert Statement into tbl_emp_details
$datas = $database->insert("result",
[
"value_1" => $x,
"value_2" => $y,
"value_total" => $total
]);
//print_r($datas);
