<?php
$ASSET_PATH = $_SERVER['DOCUMENT_ROOT']."/assets/php";
$page = 1;
require($ASSET_PATH."/header.inc");
?>
	<div class="body-container">	
		<div class="wrapper">
			<div class="days-left">
				<p>DAY <span id="get-day"></span></p>
			</div>
			<div class="main-view">
				<ul id="myTab" class="nav nav-tabs" role="tablist">
		      		<li role="presentation" class="active">
		      			<a href="#profile" id="profile-tab" role="tab" data-toggle="tab" aria-controls="profile" aria-expanded="true">Profile</a>
		      		</li>
		      		<li role="presentation">
		      			<a href="#progress" role="tab" id="progress-tab" data-toggle="tab" aria-controls="progress">Goal</a>
		      		</li>
		   		</ul>
		    	<div id="myTabContent" class="tab-content">
		      		<div role="tabpanel" class="tab-pane fade in active" id="profile" aria-labelledBy="profile-tab">
		      			<div class="page-header"><h1>your profile</h1></div>
		        		
		     		</div>
		        	<div role="tabpanel" class="tab-pane fade" id="progress" aria-labelledBy="progress-tab">
		        		<div class="page-header"><h1>your progress</h1></div>
		        		<div id="graph" style="min-width: 100%; height: 400px; margin: 0 auto"></div>
		        		<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
		       		</div>
		    	</div>
		    </div>
		</div>
	</div>

<?php
require($ASSET_PATH."/footer.inc");
?>