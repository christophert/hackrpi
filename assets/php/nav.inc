<?php
//nav.inc
?>
		<div class="header-container">
			<div class="header">
				<p class="signInInfo">Hello, <?php echo $_SESSION['firstName']." ".$_SESSION['lastName']; ?>! (<a href="/logout.php">Logout</a>)</p>
				<h3 class="brand">App</h3>
			</div>
		</div>