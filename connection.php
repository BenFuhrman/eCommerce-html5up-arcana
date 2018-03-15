<?php

 
function Connect() {
	 $dbhost = "localhost:3306";
	 $dbuser = "root";
	 $dbpass = "";
	 $dbname = "test";
	 
	 // Create connection
	 $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
	 
	if (!$conn) {
		echo "Connection error";
	  //  die("Couldn't enter data: ".$conn->error);
		exit;
	}
	//echo nl2br("Connected");
	return $conn;
}
 
?>