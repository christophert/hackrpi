<?php
$ASSET_PATH = $_SERVER['DOCUMENT_ROOT']."/assets/php";
$page = 0;
require($ASSET_PATH."/header.inc");
?>
	<div class="body-container">	
		<div class="wrapper">
			<center><div class="days-left">
				<p>DAY <span>28</span></p>
			</div></center>
			<center><button id="log-button" type="button">Log Smoke</button></center>
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
		      			<div class="page-header"><button type="button" id="edit-profile" aria-label="Edit"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span><h1>Your Profile</h1></div>
		      			<div class="successMessage" id="successMessage"></div>
						<div class="errorMessage" id="errorMessage"></div>
		      			<div id="user-information">
		      				<label>Name: </label> <span id="name"></span><br>
		      				<label>Email: </label> <span id="email"></span><br>
		      				<label>Phone Number: </label> <span id="phone"></span><br>
		      				<label>Age: </label> <span id="age"></span> years old<br>
		      				<label>Weight: </label> <span id="weight"></span> lbs.<br>
		      				<label>Brand of Cigarette: </label> <span id="brand"></span> at <span id="nicAmt"></span>mg of nicotine per cigarette.<br>
		      				<label>Smokes a day: </label> <span id="numDay"></span><br>
		      				<label>Program Length: </label> <span id="goal"></span> days<br>
		      				<label>Bedtime: </label> <span id="bedtime"></span> hours
		      			</div>
		     		</div>
		        	<div role="tabpanel" class="tab-pane fade" id="progress" aria-labelledBy="progress-tab">
		        		<div class="page-header"><h1>Your Progress</h1></div>
		        		<center><div id="graph-container"><div id="graph"></div></div></center>
						<p class="progress-info">Goal for tomorrow: 10 cigarettes</p>
		       		</div>
		    	</div>
		    </div>
		</div>
	</div>

<?php
require($ASSET_PATH."/footer.inc");
?>