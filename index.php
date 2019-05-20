<!DOCTYPE html>
<html>
  <head>
    <title>A[4] Tech Solutions</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="icon" href="a4Logo_32x32.png" type="image/x-icon">
  </head>
  <body>
      <?php
        // Database credentials
        $dbServername = "127.0.0.1";
        $dbUsername = "maliboa";
        $dbPassword = "1464572";
        $dbName = "Test_WS";
        
        $conn =  mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

        // Selecting the data from the database
        $query = "SELECT * FROM Data ORDER BY id DESC LIMIT 1;";
        $result = mysqli_query($conn, $query);
        $resultCheck = mysqli_num_rows($result);

        // Setting up arrays for the data
        $rain = [];
	$wind = [];
        $speed = [];
        $temp = [];
        $humid = [];
        $pressure = [];
        $precip = [];

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                // storing the data in the arrays based on column name
                $rain = $row['rain'];
                $speed = $row['speed'];
                $temp = $row['temp'];
                $humid = $row['humid'];
                $pressure = $row['pressure'];
                $precip = $row['precip'];
		$wind = $row['wind'];
            }
        } 
    ?>

    <!-- Script that converts $pressure php array to a Javascript array -->
	<script type="text/javascript">
    var j_pressure = <?php echo $pressure ?>;
    </script>
    <!-- Script that checks precipitation and outputs proper image -->
    <script>
    function img_info(x) {
      if (x >= 1023){
        return "sunny.png"
      }
      else if (x < 1023 && x >= 1016) {
        return "cloudy.png"
      }
          else if (x < 1016 && x >=1009) {
              return "partRainy.png"
          }
      else {
        return "allRainy.png"
      }
    }
    </script>

      <header>
        <div class="topsection">
          <h1>A[4] Tech Solutions</h1>
          <h2>Creating opportunities from challenges.<h2>
          <h1>
          <?php 
            date_default_timezone_set('US/Eastern');
            echo date("F j, Y  g:i a");
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
      <div class="mainsection">
        <div class="weathersection">
          <div class="weatherbox">
            <h1 id="location">Tampa, FL</h1>
                <div id="weatherStats">
                    <div id="temperature">
                        <p><?php echo $temp ?>&#8457 <img id="p1" width="80px" height="80px" src="">	
						            <script>
							          document.getElementById("p1").src = img_info(j_pressure)
						            </script>
                        </p>
                    </div>  
          </div>
          </div>
          <div class="weatherbox">
            <div class="weatherdetails">
              <div id="windSpeed" >
                  <p>Wind Speed - <span><?php echo $speed . " mph"?></span></p>
              </div>
	      <div id="wind">
                  <p>Wind Direction - <span><?php echo $wind . ""?></span></p>
              </div>
              <div id="humidity" >
                  <p>Humidity - <span><?php echo $humid . "%"?></span></p>
              </div>
              <div id="chOfPrecip" >
                  <p>Chance of rain - <span><?php echo $precip . "%"?></span></p>
              </div>
              <div id="barometer" >
                  <p>Barometer - <span><?php echo $pressure . " mb"?></span></p>
              </div>
              <div id="rain" >
                  <p>Rainfall - <span><?php echo $rain . " inches"?></span></p>
                  
              </div>
            </div>  
          </div>
          </div>
          </div>
      
  </body>
</html>
