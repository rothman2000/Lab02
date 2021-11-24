<!DOCTYPE html>
<html>
<head>
<title>Test</title>
</head>
<body>

<?php
	$servername = "localhost";
	$username = "student";
	$password = "website";
	$dbasename = "labwork";
	
	//create connection
	$mysqli = new mysqli($servername, $username, $password, $dbasename);
	
	//check connection
	if ($mysqli->connect_errno) {
		printf("Connection failed: %s\n", $mysqli->connect_error);
		exit();
	}
	
	 
	?>	
	
	
	
	
	

</body>
</html>

