<?php
//info api
$FUNCPATH = $_SERVER['DOCUMENT_ROOT']."/assets/php/func.inc";
require($FUNCPATH);

$workable = new progDB();
$workable->setId($_SESSION['userId']);
print($workable->getId());
$response = $workable->getUserInfo();
if($response !== NULL) {
	header("Content-Type: application/json");
	echo json_encode($response);
}
else
	header("HTTP/1.1 404 Information Not Found");

$workable = NULL;
?>