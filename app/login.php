<?php
//login.php
$page = 99;
$ASSET_PATH = $_SERVER['DOCUMENT_ROOT']."/app/assets/php";
require($ASSET_PATH."/header.inc");
?>
		<div class="container">
			<form class="signin" id="signin" role="form" action="/app/api/login.php" method="post">
				<h2 class="heading">Sign in</h2>
				<input type="email" class="form-control" placeholder="john@smith.com" id="email" name="email" autofocus="autofocus" required>
				<input type="password" class="form-control" placeholder="password" id="password" name="password" required>
				<?php if(!empty($_GET['redir'])) { ?><input type="hidden" name="redir" value="<?php echo $_GET['redir']; ?>" /> <?php } ?>
				<button class="login-button" type="submit">Sign In</button>
			</form>
		</div>
<?php
require($ASSET_PATH."/footer.inc");
?>