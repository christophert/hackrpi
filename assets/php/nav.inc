<?php
//nav.inc
?>
		<div class="header-container">
			<div class="header">
				<p class="signInInfo"><?php if (isset($_SESSION['userId'])) { ?> Hello, <?php echo $_SESSION['firstName']." ".$_SESSION['lastName']; ?>! (<a href="/logout.php">Logout</a>) <?php } else { ?><a href="/login.php">Login</a> <?php } ?></p>
				<h3 class="brand">App</h3>
			</div>
		</div>