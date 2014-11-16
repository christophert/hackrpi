<?php
//login.php
$page = 99;
$ASSET_PATH = $_SERVER['DOCUMENT_ROOT']."/assets/php";
require($ASSET_PATH."/header.inc");
?>
		<div class="container">
			<div class="jumbotron">
				<h1>NicoQuit</h1>
				<p>We are a service that assists current smokers that want to quit. The program helps you keep track of when you smoke and allows you slowly lean off of smoking to leave a cleaner, better life.</p>
			</div>
			<form class="signin" id="signin" role="form">
				<h2 class="heading">Sign in</h2>
				<input type="email" class="form-control" placeholder="john@smith.com" id="email" name="email" autofocus="autofocus" required>
				<input type="password" class="form-control" placeholder="password" id="password" name="password" required>
				<?php if(!empty($_GET['redir'])) { ?><input type="hidden" name="redir" value="<?php echo $_GET['redir']; ?>" /> <?php } ?>
				<button class="login-button" type="submit">Sign In</button>
			</form>
			<div class="successMessage" id="successMessage"></div>
			<div class="errorMessage" id="errorMessage"></div>
		</div>
<?php
require($ASSET_PATH."/footer.inc");
?>