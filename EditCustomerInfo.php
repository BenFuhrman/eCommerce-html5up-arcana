<?php

include ("connection.php");
session_start();
$conn = Connect();
$fname = $_POST["FirstName"];
$lname = $_POST["LastName"];
$custemail = $_POST["Email"];
$custpass =  $_POST["Password"];
$checkpass = $_POST["Password2"];
$address = $_POST["Address"];
$city = $_POST["City"];
$state = $_POST["State"];
$zip = $_POST["Zip"];



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

echo $sqlfirstname;
$numentries = mysqli_num_rows($amountwithsameemail);

$_SESSION["name"] = $sqlfirstname;
$isAllowed = $custpass == $checkpass;
if($isAllowed){
	$updateInfo = $conn->query("UPDATE customerdata SET FirstName = '$fname', LastName = '$lname', Address = '$address', City = '$city', State = '$state', Zip = '$zip' WHERE Email='$custemail'");
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
		alertMessage("Changes Saved");
		window.open("/eCommerce-html5up-arcana/MemberIndex_page.php", "_self");
	}
	else {
		window.history.go(-1);
		alertMessage("Incorrect email / password.");
	}
</script>
