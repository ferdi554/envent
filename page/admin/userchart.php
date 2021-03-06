<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
			<title>Grafik pendapatan perkapita</title>
		<script type="text/javascript" src="../../js/jquery.min.js"></script>
		<script src="../../js/highcharts.js"></script>

		<script type="text/javascript">
$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container',
                type: 'line',  
                marginRight: 130,
                marginBottom: 25
            },
            title: {
                text: 'BARANG',
                x: -20
            },
            xAxis: {
                categories: ['12','13','14','15']
            },
            yAxis: {
                title: { 
                    text: 'Banyaknya BARANG'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: { 
                formatter: function() {
                        return '<b>'+ this.series.name +'</b><br/>'+
                        this.x +': '+ this.y ;
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -20,
                y: 100,
                borderWidth: 0
            },
            series: [{  
                name: 'Jumlah Barang',  
                data: [0,0, 0,21]
            }]
        });
    });
    
});
		</script>
	</head>
	<body>

<!--grafik akan ditampilkan disini -->
<div id="container" style="width:102%;height: 300px; margin: 0 auto"></div>
	</body>
</html>