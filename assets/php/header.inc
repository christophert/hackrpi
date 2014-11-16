<?php
//header.inc
$ASSET_PATH = $_SERVER['DOCUMENT_ROOT']."/assets/php";
if(!isset($page)) {
	die("<p>Direct access not permitted.</p>");
}
session_start();
if(!isset($skipauth)) {
  if(!isset($_SESSION['userId']) && $page != 99) {
  	header('Location: /login.php?redir='.urlencode($_SERVER['REQUEST_URI']));
  }
  elseif(isset($_SESSION['userId']) && $page == 99) {
    header('Location: /');
  }
}
switch ($page) {
	case 0:
		$title = "Home";
		break;
	default:
		$title = "Login";
		break;
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NicoQuit | <?php echo $title; ?></title>

    <!-- Bootstrap -->
    <link href="assets/css/app.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<?php
include($ASSET_PATH."/nav.inc");
?>