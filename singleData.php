      <?php
        // Database credentials
        $dbServername = "###.###.###.###";
        $dbUsername = "yourdbUsername";
        $dbPassword = "yourdbPassword";
        $dbName = "yourdbName";
        
        $conn =  mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

        // Selecting the data from the database
        $query = "SELECT * FROM [yourdbNAme] ORDER BY [yourPrimaryKey] DESC LIMIT 1;";
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
	
	//sanity check
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

    <!-- Script that checks pressure and outputs proper image -->
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

      
