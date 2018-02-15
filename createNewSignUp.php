<?php

require 'connection.php';
$conn    = Connect();
$fname   = $_POST['name'];
/*
$lname   = $conn->real_escape_string($_POST['LastName']);
$email    = $conn->real_escape_string($_POST['Email']);
$password   = $conn->real_escape_string($_POST['Password']);
$address   = $conn->real_escape_string($_POST['Address']);
$city    = $conn->real_escape_string($_POST['City']);
$state    = $conn->real_escape_string($_POST['State']);
$zip   = $conn->real_escape_string($_POST['Zip']);
$query   = "INSERT into customerdata (FirstName, LastName, Email, Password, Address, City, State, Zip) VALUES('" . $fname . "','" . $lname ."','" . $email . "','" . $password . "','" . $address . "','" . $city . "','" . $state . "','" . $zip . "')";
*/
$query = "INSERT into temptable (name) VALUES ('" . $fname . "')";

 
echo "Thank You For Contacting Us <br>";
 
//$conn->close();
 
?>