<?php


require 'medoo.min.php';

$database = new medoo([
// required
'database_type' => 'mysql',
'database_name' => 'disruptedhotel', // boleh tukar
'server' => 'localhost',
'username' => 'root', // boleh tukar
'password' => '', // boleh tukar
'charset' => 'utf8',

// optional
'port' => 3306,
// driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
'option' => [
PDO::ATTR_CASE => PDO::CASE_NATURAL
]
]);
