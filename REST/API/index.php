<?php
require_once ("supportFunction.php");
require_once ("cache.php");
require_once ("connect.php");
require_once ("medoo.min.php");
// register interface here
// you can close any api for maintainance by ( $interface["api-name"] = false )
$interface = array();

//Disrupted Hotel

//Admin Select Statement
$interface["selectactivity"] = true; // param = type of weather
$interface["login"] = true;

//mobile Select statement
$interface["selectallhotel"] = true;
$interface["selectallhotelwhere"] = true;

//Admin Insert Statement
$interface["registerhoteliers"] = true; // param all registration information
$interface["activityregister"] = true;


$interface["update_hs"] = true; // &username=
$interface["premise"] = true;
$interface["premise_restaurant"]= true;
$interface["alluser"] =true;
$interface["newcompany"]=true;
$interface["selectcompany"]=true;
$interface["industrytype"]=true;

// Login
// $interface["login"] = true;
//Insert Statement
$interface["insertspp"] = false;
$interface["register"] = true;
$interface["empdetails"] =true;
$interface["performance"]=true;
$interface["sp1"]=true;
$interface["insertstrategy"]=true;
$interface["insertkpi"]=true;
//Select Statement
$interface["selectemployee"] =true;
$interface["selectemployee2"] =true;
$interface["selectcc"] =true;
$interface["selectmanager"] = true;
$interface["selectmanagerstaff"]=true;
$interface["submitedselectcc"]=true;
$interface["selectsp"]=true;
$interface["selectkpi1"]=true;
$interface["selectupdatekpi"]=true;
$interface["selectdepartment"] =true;
$interface["selectdefaultdepartment"]=true;
$interface["selectemployeedepartment"]=true;
//Update Statement
$interface["staffreview"] = true;
$interface["manageradjustreview"] = true;
$interface["finalreview"] = true;
$interface["updatepassword"] =true;
$interface["adminupdatekpi"] = true;
$interface["staffupdatekpi"] = true;
$interface["managerupdatekpi1"] = true;
$interface["updateroles"] = true;
// Count
$interface["counttotalstaff"] = true;
$interface["counttotaldepartment"] =true;


////////////////////////////////////
// Do not edit after this line
////////////////////////////////////

$cacheFor = array();

$cacheFor['update_hs'] = 60; // minute
/*
$cacheFor['utm_news_latest'] = 30; // minute
$cacheFor['utm_event'] = 60; // minute
$cacheFor['news'] = 60; // minute
$cacheFor['utmpoi'] = 60; // minute
$cacheFor['faculty_event'] = 300; // minute
*/


// preparing $key for cache

function parse_url_for_key()
	{
	$url = $_SERVER['QUERY_STRING'];
	$exploded_url = explode("&",$url);
	$exclude_signiture = array();
	for ($i = 0;$i < count($exploded_url);$i++)
		{
		if (startsWith($exploded_url[$i],"signature") === true)
			{
			}
		else if (startsWith($exploded_url[$i],"flush") === true)
			{
			}
		else
			{
			array_push($exclude_signiture,$exploded_url[$i]);
			}
		}
	$url = implode("&",$exclude_signiture);
	return $url;
	}


// preparing $key for cache
$key =  parse_url_for_key();
//$cache = new FileCache();

$interface_type = isset($_GET['interface']) ? sanitize($_GET['interface']) : "" ;

if ($interface_type == "")
	{
	//echo "This is the access to UTM API. Click <a href='./index.html'>here</a> to learn to use it.";
	echo "you have reach to Disrupted Hotel System  API. kindly contact system administrator if you see this messege.";
	//echo "unknown";
	exit();
	}

$jsonResult = array();
$sentItRaw = false;

// echo $interface_type;
if(@$interface[$interface_type] === true) // interface is available
	{
		include dirname(__FILE__)."/interface/".$interface_type.".php";
	}
else if(@$interface[$interface_type] === false)
	{
	array_push($jsonResult,array('error'=>'API closed for maintenance'));
	}
else
	{
	array_push($jsonResult,array('error'=>'API not exists!'));
	}

if ($interface_type == "podcast")
	{
	header("HTTP/1.1 401 KO");
	}
else
	{
	header("HTTP/1.1 200 OK");
	}
header('Content-Type: application/json');

$json = jsonp_encode($jsonResult);
echo $json;
