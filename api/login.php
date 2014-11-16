<?php
//login api
$FUNCPATH = $_SERVER['DOCUMENT_ROOT']."/assets/php/func.inc";
require($FUNCPATH);
if(empty($_POST['email']) || empty($_POST['password'])) {
	die("<p>General Error</p>");
}
else {
	session_start();
	$workable = new proLogin();
	$workable->setId($_POST['email']);
	$response = $workable->getUserInfo();
	if($response !== NULL) {
		//not secure at all
		$_SESSION['firstName'] = $response['firstName'];
		$_SESSION['lastName'] = $response['lastName'];
		$_SESSION['userId'] = $response['id'];
		header("Content-Type: application/json");
		$return = array();
		$return['userId'] = $response['id'];
		$return['status'] = array('validated' => TRUE);
		echo json_encode($return); 
	}
	else:
		header("HTTP/1.1 404 User Not Found");
}
?>