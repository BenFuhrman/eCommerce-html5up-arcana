<?php

include ("connection.php");
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
$numentries = mysqli_num_rows($amountwithsameemail);
$isAllowed = $numentries > 0;
 
$conn->close();

# jabba@gmail.com
# JabbaTheHut1

?>

<script type="text/javascript">

	function alertMessage(theMessage){
		window.setTimeout( function (){alert(theMessage)}, 0);
	}

	var wasSuccessful = "<?php echo $isAllowed ?>";
	if(wasSuccessful){
		alertMessage("Login successful");
		window.open("/eCommerce-html5up-arcana/login.html", "_self");
	}
	else {
		window.history.go(-1);
		alertMessage("Incorrect email / password.");
	}
</script>