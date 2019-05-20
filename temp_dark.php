<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width,
    initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
    content="ie-edge">
    <link rel="stylesheet" href="charts.css">
    <link rel="stylesheet" href="reset.css">
    <link href="https://fonts.googleapis.com/css?family=Bitter|Staatliches" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta http-equiv="refresh" content="60"> <!-- Refreshes page in 60 seconds -->
    <title>A[4] Tech Solutions</title>
    <link rel="icon" href="a4Logo_32x32.png" type="image/x-icon"> 
 </head>
  <body>
	<header>
        <div class="topsection">
          <h1>A[4] Tech Solutions</h1>
          <h2><Creating opportunities from challenges.</h2>
		  <h1>
          <?php 
            date_default_timezone_set('US/Eastern');
            echo date("F j, Y, g:i a");
            ?>
          </h1>
		  
		   <img id="logo" src="a4Logo_200x200.jpg" alt="A4 Logo">
		   
        </div>

        <div class="navbar">
            <div class="menubtn">
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            </div>

            <div class="dropdown">
              <button class="dropbtn">Charts
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="temp_dark.php">Temperature</a>
                <a href="humidity_dark.php">Humidity</a>
                <a href="pressure_dark.php">Pressure</a>
                <a href="precip_dark.php">Precipitation</a>
                <a href="wind_dark.php">Winds</a>
              </div>

            </div>
        </div>
      </header>
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript">
      	google.charts.load('current', {'packages':['corechart']});
      	google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var jsonData = $.ajax({
			url: "getTempData.php",
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
			url: "getWeekTempData.php",
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
			url: "getMonthlyTempData.php",
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
  
	<div class="mainsection">
		
		<div id="curve_chart"></div>
        <div id="curve_chart"></div> 
		<div id="curve_chart"></div>
		
	</div>
  </body>
</html>
