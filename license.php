<?php
//license.php
$ASSET_PATH = $_SERVER['DOCUMENT_ROOT']."/assets/php";
$page = 98;
$skipauth = true;
require($ASSET_PATH."/header.inc");
?>
		<div class="container">
			<div class="page-header"><h1>NicoQuit License</h1></div>
			<p><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">NicoQuit</span> by <span xmlns:cc="http://creativecommons.org/ns#" property="cc:attributionName">TranIT</span> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/">Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License</a>.</p>
			<h2>About Project</h2>
			<p>This project was built by <a href="https://tran.pw">Christopher Tran</a>, Anmol Modur, Morgan Keiser, Mike Hilliker, and Zack Thompson (with lots of love and frustration) for HackRPI Fall 2014.</p>
		</div>
<?php
require($ASSET_PATH."/footer.inc");
?>