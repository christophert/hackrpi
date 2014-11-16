$(function() {
    $('#graph').highcharts({
        chart: {
            zoomType: 'x'
        },
        title: {
            text: 'Cigaretts used per day'
        },
        subtitle: {
            text: document.ontouchstart === undefined ?
                'Click and drag in the plot area to zoom in' : 'Pinch the chart to zoom in'
        },
        xAxis: {
            type: 'datetime',
            minRange: 2 * 24 * 3600000 // two days
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
                    linearGradient: {
                        x1: 0,
                        y1: 0,
                        x2: 0,
                        y2: 1
                    },
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
            name: 'Cigaretts',
            pointInterval: 24 * 3600 * 1000,
            pointStart: Date.UTC(2014, 10, 1),
            data: [
                18, 19, 18, 17, 17, 17, 16, 15, 15, 15, 14, 14, 14, 16, 17, 15, 14, 14, 13, 13, 13, 12, 12, 12, 12, 11, 11, 10
            ]
        }]
    });
});
