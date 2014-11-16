<?php
if(!isset($page)) {
	die("<p>Direct access not permitted.</p>");
}
?>
	<div id="footer">		
		<div class="container">
			<small id="commit">Commit <?php echo substr(`git rev-parse --verify HEAD`,0,7); ?></small>
			<small>Built for HackRPI. | Copyright 2014 TranIT. <a href="/license.php">NicoQuit License</a></small>
		</div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="assets/js/graph.js"></script>
	<script src="http://code.highcharts.com/highcharts.js"></script>
	<script src="http://code.highcharts.com/modules/exporting.js"></script>
	<?php if($page==0) { ?>
	<script src="assets/js/info.js"></script>
	<?php } ?>
	<?php if($page==99) { ?>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/path.js/0.8.4/path.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-serialize-object/2.0.0/jquery.serialize-object.compiled.js"></script>
	<script src="assets/js/login.js"></script>
	<?php } ?>
  </body>
</html>