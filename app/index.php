<?php
$ASSET_PATH = $_SERVER['DOCUMENT_ROOT']."/app/assets/php";
$page = 1;
require($ASSET_PATH."/header.inc");
?>
	<div class="body-container">	
		<div class="wrapper">
		<ul id="myTab" class="nav nav-tabs" role="tablist">
      		<li role="presentation" class="active">
      			<a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Home</a>
      		</li>
      		<li role="presentation">
      			<a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">Profile</a>
      		</li>
   		</ul>
    	<div id="myTabContent" class="tab-content">
      		<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledBy="home-tab">
        		<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
     		</div>
        	<div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledBy="profile-tab">
        		<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
       		</div>
    	</div>
<?php
require($ASSET_PATH."/footer.inc");
?>