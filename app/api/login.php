<?php
//login api
$FUNCPATH = $_SERVER['DOCUMENT_ROOT']."/app/assets/php/func.inc";
require($FUNCPATH);
if(empty($_POST['email']) || empty($_POST['password'])) {
	die("<p>Generaal Error</p>");
}
else {
	session_start();
	//not secure at all
	$_SESSION['firstName'] = "John";
	$_SESSION['lastName'] = "Smith";
	$_SESSION['userId'] = 1;
	if(empty($_POST['redir']))
		header('Location: /app');
	else
		header('Location: /'.urldecode($_POST['redir']));
}
?>