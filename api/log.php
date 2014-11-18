<?php
//log api

$FUNCPATH = $_SERVER['DOCUMENT_ROOT']."/assets/php/func.inc";
require($FUNCPATH);

session_start();
if(empty($_SESSION['userId'])) {
	die("<p>Not Authenticated</p>");
}

//do log stuff
//new obj
$workable = new ProgDB();
header("Content-Type: application/json");
$response = array();
$response['userId'] = $_SESSION['userId'];
$response['status'] = array();
$response['time'] = time();
if($workable->updateUserLog()) {
	$response['status']['logged'] = true;
	echo json_encode($response, JSON_PRETTY_PRINT);
} else {
	header("HTTP/1.1 510 Unable to Log");
	#$response['status']['logged'] = false;
}
?>