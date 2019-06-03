<?php

$datas = $database->select("premise",["premise_name","premise_coordinate"],["premise_type" => Restaurant]);
	//["premise_type" => Restaurant]);
//$jsonResult = $datas; 
print_r($datas);