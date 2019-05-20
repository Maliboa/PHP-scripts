<?php
	//Enter the database creditials here
	$dbServername = "###.####.###.###";
	$dbUsername = "yourUsername";
	$dbPassword = "yourPassword";
	$dbName = "yourDBName";
	
	$conn =  mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
	
	//This is the SQL query for 30 days of 5 minute intervals, change the number after LIMIT as needed
	$sql = "SELECT [primaryKeyName], [temperatureColumnName] FROM [yourDBName] ORDER BY [primaryKeyName] DESC LIMIT 60480";
	
	$result = mysqli_query($conn, $sql);
	
	//building the PHP array
	$rows = array();
	$table = array();
	
	$table['cols'] = array(
		array(
			'label' => 'Reading ID',
			'type' => 'number'
			),
		array(
			'label' => 'Temperature',
			'type' => 'number'
			)
	);
	
	// populating the $rows array
	while($row = mysqli_fetch_array($result)){
		
		$sub_array = array();
		$sub_array[] = array('v' => (int) $row['id']);
		$sub_array[] = array('v' => (int) $row['temp']);
		$rows[] = array('c' => $sub_array);	
	}
	
	//populating the $table array and encoding as a JSON array
	$table['rows'] = $rows;
	$jsonTable = json_encode($table);

	echo $jsonTable;	

?>
