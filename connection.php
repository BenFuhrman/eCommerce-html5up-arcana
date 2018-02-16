<?php
 
 
function Connect() {
	 $dbhost = "localhost:3306";
	 $dbuser = "root";
	 $dbpass = "";
	 $dbname = "test";
	 
	 // Create connection
	 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	 // or die($conn->connect_error)
	 //return $conn;

	//$success = $conn->query($query);
	if (!$conn) {
		echo "Connection error";
	  //  die("Couldn't enter data: ".$conn->error);
		exit;
	}
	echo "Connected";
	return $conn;
}
 
?>