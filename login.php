<?php

include ("connection.php");
session_start();
$conn = Connect();

$toinsertemail = $_POST["Email"];
$toinsertpass =  $_POST["Password"];

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
 
$sqlcheckemail = "SELECT * FROM customerdata WHERE Email='$toinsertemail' AND Password='$hash'";
$amountwithsameemail = $conn->query($sqlcheckemail);

$row = mysqli_fetch_array($amountwithsameemail);
$sqlfirstname = $row['FirstName'] . "";
$sqllastname = $row['LastName'] . "";
$sqlemail = $row['Email'] . "";
$sqladdress = $row['Address'] . "";
$sqlcity = $row['City'] . "";
$sqlstate = $row['State'] . "";
$sqlzip = $row['Zip'] . "";


$numentries = mysqli_num_rows($amountwithsameemail);

$isAllowed = $numentries > 0;

if($isAllowed){
	$_SESSION["name"] = $sqlfirstname;
	$_SESSION["lastName"] = $sqllastname;
	$_SESSION["email"] = $sqlemail;
	$_SESSION["address"] = $sqladdress;
	$_SESSION["city"] = $sqlcity;
	$_SESSION["state"] = $sqlstate;
	$_SESSION["zip"] = $sqlzip;	
}
 
$conn->close();

# <jabba>@gmail.com
# <Jabba>TheHut1

?>

<script type="text/javascript">

	function alertMessage(theMessage){
		window.setTimeout( function (){alert(theMessage)}, 0);
	}

	var wasSuccessful = "<?php echo $isAllowed ?>";
	if(wasSuccessful){
		alertMessage("Login successful");
		window.open("/eCommerce-html5up-arcana/index_page.php", "_self");
	}
	else {
		window.history.go(-1);
		alertMessage("Incorrect email / password.");
	}
</script>
