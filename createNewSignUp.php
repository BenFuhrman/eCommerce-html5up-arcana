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

echo nl2br("\n");
/*
echo $toinsertfname;
echo $toinsertlname;
echo $toinsertemail;
echo $toinsertpass;
echo $toinsertaddress;
echo $toinsertcity;
echo $toinsertstate;
echo $toinsertzip;
echo nl2br("\n");
*/
 
$sqlcheckemail = "SELECT * FROM customerdata WHERE Email='$toinsertemail'";
$amountwithsameemail = $conn->query($sqlcheckemail);
if(mysqli_num_rows($amountwithsameemail) > 0){
	echo nl2br('Provided email already exists');
} 
else{
	$sql = "INSERT INTO customerdata (FirstName, LastName, Email, Password, Address, City, State, Zip) VALUES ('$toinsertfname', '$toinsertlname', '$toinsertemail', '$toinsertpass', '$toinsertaddress', '$toinsertcity', '$toinsertstate', '$toinsertzip')";
	$result = $conn->query($sql);
	echo nl2br('New account successfully created');
}
 
$conn->close();

?>

<?php 

header("Location:{$_SERVER['HTTP_REFERER']}");
exit;

?>








