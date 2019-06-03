<?php

$fullname = $_GET["fullname"];
$orgname = $_GET["Rorgname"];
$email = $_GET["Remail"];
$password = $_GET["Rpassword"];
// echo $fullname;
// echo $orgname;
// echo $email;
// echo $password;

// Insert Statement Into tbl_emp
$datas = $database->insert("tbl_user_details",
[
  "full_name" => $fullname,
"email" => $email,
"password" => $password,
"org_name" => $orgname]);
print_r($datas);
