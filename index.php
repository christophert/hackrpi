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
		        		<div id="graph" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
		        		<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
		       		</div>
		    	</div>
		    </div>
		</div>
	</div>
	<script>
			document.getElementById("get-day").innerHTML = "28";
			$(function () {
			    $('#graph').highcharts({
			        chart: {
			            zoomType: 'x'
			        },
			        title: {
			            text: 'Amount of Cigaretts Smoked'
			        },
			        subtitle: {
			            text: document.ontouchstart === undefined ?
			                    'Click and drag in the plot area to zoom in' :
			                    'Pinch the chart to zoom in'
			        },
			        xAxis: {
			            type: 'datetime',
			            minRange: 1 * 24 * 3600000 // one day
			        },
			        yAxis: {
			            title: {
			                text: 'Cigaretts'
			            }
			        },
			        legend: {
			            enabled: false
			        },
			        plotOptions: {
			            area: {
			                fillColor: {
			                    linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1},
			                    stops: [
			                        [0, Highcharts.getOptions().colors[0]],
			                        [1, Highcharts.Color(Highcharts.getOptions().colors[0]).setOpacity(0).get('rgba')]
			                    ]
			                },
			                marker: {
			                    radius: 2
			                },
			                lineWidth: 1,
			                states: {
			                    hover: {
			                        lineWidth: 1
			                    }
			                },
			                threshold: null
			            }
			        },
			
			/*
			 Load the data from the CSV file. This is the contents of the file:
			 
				Apples,Pears,Oranges,Bananas,Plums
				John,8,4,6,5
				Jane,3,4,2,3
				Joe,86,76,79,77
				Janet,3,16,13,15
				
			 */ 
			$.get('data.csv', function(data) {
				// Split the lines
				var lines = data.split('\n');
				$.each(lines, function(lineNo, line) {
					var items = line.split(',');
					
					// header line containes categories
					if (lineNo == 0) {
						$.each(items, function(itemNo, item) {
							if (itemNo > 0) options.xAxis.categories.push(item);
						});
					}
					
					// the rest of the lines contain data with their name in the first position
					else {
						var series = { 
							data: []
						};
						$.each(items, function(itemNo, item) {
							if (itemNo == 0) {
								series.name = item;
							} else {
								series.data.push(parseFloat(item));
							}
						});
						
						options.series.push(series);
					}
					
				});
				
				var chart = new Highcharts.Chart(options);
			});
		});
	</script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>	
	<script src="http://code.highcharts.com/highcharts.js"></script>
	<script src="../module/exporting.js"></script>

<?php
require($ASSET_PATH."/footer.inc");
?>