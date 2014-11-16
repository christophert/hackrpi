<?php
if(empty($page)) {
	die("<p>Direct access not permitted.</p>");
}
?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script src="https://cdn.firebase.com/js/client/2.0.3/firebase.js"></script>
	<script type="text/javascript">
		$(function () {
		    $('#graph').highcharts({
		        chart: {
		            zoomType: 'x'
		        },
		        title: {
		            text: 'USD to EUR exchange rate from 2006 through 2008'
		        },
		        subtitle: {
		            text: document.ontouchstart === undefined ?
		                    'Click and drag in the plot area to zoom in' :
		                    'Pinch the chart to zoom in'
		        },
		        xAxis: {
		            type: 'datetime',
		            minRange: 14 * 24 * 3600000 // fourteen days
		        },
		        yAxis: {
		            title: {
		                text: 'Exchange rate'
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

		        series: [{
		            type: 'area',
		            name: 'USD to EUR',
		            pointInterval: 24 * 3600 * 1000,
		            pointStart: Date.UTC(2014, 10, 1),
		            data: [
		                18,19,18,17,17,17,16,15,15,15,14,14,14,16,17,15,14,14,13,13,13,12,12,12,12,11,11,10
		            ]
		        }]
		    });
		});
	</script>
	<script src="http://code.highcharts.com/highcharts.js"></script>
	<script src="http://code.highcharts.com/modules/exporting.js"></script>
  </body>
</html>