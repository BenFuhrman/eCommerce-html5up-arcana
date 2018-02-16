<?php

include ("connection.php");
$conn = Connect();
$toinsertfname =  $_POST["FirstName"];
$toinsertlname =  $_POST["LastName"];
$toinsertemail = $_POST["Email"];
$toinsertpass =  $_POST["Password"];
$toinsertaddress = $_POST["Address"];
$toinsertcity =  $_POST["City"];
$toinsertstate = $_POST["State"];
$toinsertzip =  $_POST["Zip"];
echo $toinsertfname;
echo $toinsertlname;
echo $toinsertemail;
echo $toinsertpass;
echo $toinsertaddress;
echo $toinsertcity;
echo $toinsertstate;
echo $toinsertzip;
/*if (isset($_POST['FirstName'])){
	$fname = $_POST['FirstName'];
}
if (isset($_POST['LastName'])){
	$lname   = $_GET['LastName'];
}

$email    = $_GET['Email'];
$password   = $_GET['Password'];
$address   = $_GET['Address'];
$city    = $_GET['City'];
$state    = $_GET['State'];
$zip   = $_GET['Zip'];



 */ 
 
 $test1 = 'balogna';
 
$sql = "INSERT INTO customerdata (FirstName, LastName, Email, Password, Address, City, State, Zip) VALUES ('$toinsertfname', '$toinsertlname', '$toinsertemail', '$toinsertpass', '$toinsertaddress', '$toinsertcity', '$toinsertstate', '$toinsertzip')";
$result = $conn->query($sql);
//VALUES ($fname, $lname, $email, $password, $address, $city, $state, $zip)";
//$query   = "INSERT into customerdata (FirstName, LastName, Email, Password, Address, City, State, Zip) VALUES('" . $fname . "','" . $lname ."','" . $email . "','" . $password . "','" . $address . "','" . $city . "','" . $state . "','" . $zip . "')";

//$query = "INSERT into temptable (name) VALUES ('" . $fname . "')";

	
echo "Thank You For Contacting Us <br>";
 
//$conn->close();
 
?>