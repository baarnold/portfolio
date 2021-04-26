<?php # Script 18.4 - mysqli_connect.php
	// This file contains the database access information.
	// This file also establishes a connection to MySQL
	// and selects the database.
	
	// Set the database access information as constants
	DEFINE('DB_USER', 'vspsqelj_test');
	DEFINE('DB_PASSWORD', '$Li58jU+UCS[');
	DEFINE('DB_HOST', 'localhost');
	DEFINE('DB_NAME', 'vspsqelj_ch18');
	
	// Make conn ection
	$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	
	// If no connection, trigger error
	if(!$dbc) {
		trigger_error('Could not connect to MySQL: ' . mysqli_connect_error() );
	} else {
		mysqli_set_charset($dbc, 'utf8');
	}