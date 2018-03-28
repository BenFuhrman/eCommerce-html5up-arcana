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

$emailextended = $toinsertemail;
$emaillength = strlen($toinsertemail);
for ($x = $emaillength; $x < 22; $x++){
	$emailextended = $emailextended . 'a';
}

$options = [
    'cost' => 11,
    'salt' => $emailextended,
];

$hash = password_hash($toinsertpass, PASSWORD_BCRYPT, $options);

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
$numentries = mysqli_num_rows($amountwithsameemail);
$isAllowed = $numentries > 0;
//echo nl2br("Number of accounts with provided email: " . $numentries . "\n");

if($numentries > 0){
	//echo nl2br('Provided email already exists');
} 
else{
	$sql = "INSERT INTO customerdata (FirstName, LastName, Email, Password, Address, City, State, Zip) VALUES ('$toinsertfname', '$toinsertlname', '$toinsertemail', '$hash', '$toinsertaddress', '$toinsertcity', '$toinsertstate', '$toinsertzip')";
	//echo $sql . "\n";
	$result = $conn->query($sql);
	//echo $result;
}
 
$conn->close();

/*
header("Location:{$_SERVER['HTTP_REFERER']}");
exit;
?*/

?>

<script type="text/javascript">

	function alertMessage(theMessage){
		window.setTimeout( function (){alert(theMessage)}, 0);
	}
	
	var wasSuccessful = "<?php echo $isAllowed ?>";
	
	
	if(wasSuccessful == 1){
		window.history.go(-1);
		alertMessage("Error: Provided email is already in use");
	}
	else{
		// hard reload		
		alert("Successful sign-up");
		window.open("/eCommerce-html5up-arcana/signUp.html", "_self");
	}

</script>






