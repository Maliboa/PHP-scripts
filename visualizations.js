<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script type="text/javascript">

	google.charts.load('current', {'packages':['corechart']});
      	google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var jsonData = $.ajax({
			url: "1DayHelperscriptName.php",
			dataType: "json",
			async: false
			}).responseText;
		var data = new google.visualization.DataTable(jsonData);

        var options = {
          title: '24 hour -- Temperature vs. Time',
          curveType: 'function',
          legend: { position: 'bottom' },
	  vAxis:{ 
		title: 'Temperature (F)',
	        titleTextStyle: {
				  fontName: 'Tahoma',
				  bold: false,
				  italic: false
				}
		},
	  hAxis:{ 
		title: 'Reading ID',
	        titleTextStyle: {
				 fontName: 'Tahoma',
				 bold: false,
				 italic: false
				}
		},
	  backgroundColor: '#5aa7bd',
	  colors: ['#4d5f89'],
	  trendlines: {
		0: {
		    type: 'polynomial',
		    degree: 3,
		    visibleInLegend: true,
		    color: 'red',
		    tooltip: false,
		    labelInLegend: 'Temperature trend in last 24 hours',
		}
	     }
	 };
        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
    <script type="text/javascript">
      	google.charts.load('current', {'packages':['corechart']});
      	google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var jsonData = $.ajax({
			url: "7DayHelperScriptName.php",
			dataType: "json",
			async: false
			}).responseText;
		var data = new google.visualization.DataTable(jsonData);

        var options = {
          title: '7 day -- Temperature vs. Time',
          curveType: 'function',
          legend: { position: 'bottom' },
	  vAxis:{ 
		title: 'Temperature (F)',
	        titleTextStyle: {
				  fontName: 'Tahoma',
				  bold: false,
				  italic: false
				}
		},
	  hAxis:{ 
		title: 'Reading ID',
	        titleTextStyle: {
				 fontName: 'Tahoma',
				 bold: false,
				 italic: false
				}
		},
	  backgroundColor: '#5aa7bd',
	  colors: ['#4d5f89'],
	  trendlines: {
		0: {
		    type: 'polynomial',
		    degree: 3,
		    visibleInLegend: true,
		    color: 'red',
		    tooltip: false,
		}
	     }
	 };
        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
	<script type="text/javascript">
      	google.charts.load('current', {'packages':['corechart']});
      	google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var jsonData = $.ajax({
			url: "30DayHelperScriptName.php",
			dataType: "json",
			async: false
			}).responseText;
		var data = new google.visualization.DataTable(jsonData);

        var options = {
          title: '30 day -- Temperature vs. Time',
          curveType: 'function',
          legend: { position: 'bottom' },
	  vAxis:{ 
		title: 'Temperature (F)',
	        titleTextStyle: {
				  fontName: 'Tahoma',
				  bold: false,
				  italic: false
				}
		},
	  hAxis:{ 
		title: 'Reading ID',
	        titleTextStyle: {
				 fontName: 'Tahoma',
				 bold: false,
				 italic: false
				}
		},
	  backgroundColor: '#5aa7bd',
	  colors: ['#4d5f89'],
	  trendlines: {
		0: {
		    type: 'polynomial',
		    degree: 3,
		    visibleInLegend: true,
		    color: 'red',
		    tooltip: false,
			labelInLegend: 'Temperature trend over previous 30 days'
		}
	     }
	 };
        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  
