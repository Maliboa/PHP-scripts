<?php
	
	$dbServername = "127.0.0.1";
	$dbUsername = "maliboa";
	$dbPassword = "1464572";
	$dbName = "Test_WS";
	
	$conn =  mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
	$sql = "SELECT dateTime, temp FROM Data ORDER BY id DESC LIMIT 2016";
	
	$result = mysqli_query($conn, $sql);
	$rows = array();
	$table = array();
	
	$table['cols'] = array(
		array(
			'label' => 'Date and Time',
			'type' => 'number'
			),
		array(
			'label' => 'Temperature',
			'type' => 'number'
			)
	);
	
	while($row = mysqli_fetch_array($result)){
		
		$sub_array = array();
		$sub_array[] = array('v' => (int) $row['dateTime']);
		$sub_array[] = array('v' => (int) $row['temp']);
		$rows[] = array('c' => $sub_array);	
	}
	
	$table['rows'] = $rows;
	$jsonTable = json_encode($table);

	echo $jsonTable;	

?>
