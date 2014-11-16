<?php
//info api
$FUNCPATH = $_SERVER['DOCUMENT_ROOT']."/assets/php/func.inc";
require($FUNCPATH);

session_start();
$workable = new progDB();
$workable->setId($_SESSION['userId']);
$response = $workable->getUserInfo();
if($response !== NULL) {
	header("Content-Type: application/json");
	$response['brand'] = $workable->getBrandInformation();
	echo json_encode($response);
}
else
	header("HTTP/1.1 404 Information Not Found");

$workable = NULL;
?>