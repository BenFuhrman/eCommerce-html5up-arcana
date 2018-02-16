<?php

include ("connection.php");
$conn = Connect();
if (isset($_POST['FirstName'])){
	$fname = $_POST['FirstName'];
}
if (isset($_POST['LastName'])){
	$lname   = $_POST['LastName'];
}

$email    = $_POST['Email'];
$password   = $_POST['Password'];
$address   = $_POST['Address'];
$city    = $_POST['City'];
$state    = $_POST['State'];
$zip   = $_POST['Zip'];
//$test1 = 'balogna';
$sql = "INSERT INTO customerdata (FirstName, LastName, Email, Password, Address, City, State, Zip) VALUES ($fname, $lname, $email, $password, $address, $city, $state, $zip)";
$result = $conn->query($sql);
//VALUES ($fname, $lname, $email, $password, $address, $city, $state, $zip)";
//$query   = "INSERT into customerdata (FirstName, LastName, Email, Password, Address, City, State, Zip) VALUES('" . $fname . "','" . $lname ."','" . $email . "','" . $password . "','" . $address . "','" . $city . "','" . $state . "','" . $zip . "')";

//$query = "INSERT into temptable (name) VALUES ('" . $fname . "')";

 
echo "Thank You For Contacting Us <br>";
 
//$conn->close();
 
?>