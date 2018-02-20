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

$hash = crypt($toinsertpass);

//echo nl2br("\n");
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
$isAllowed = mysqli_num_rows($amountwithsameemail) > 0;
if($isAllowed){
	//echo nl2br('Provided email already exists');
	//header('Location: /eCommerce-html5up-arcana/badSignUp.html');
} 
else{
	$sql = "INSERT INTO customerdata (FirstName, LastName, Email, Password, Address, City, State, Zip) VALUES ('$toinsertfname', '$toinsertlname', '$toinsertemail', '$hash', '$toinsertaddress', '$toinsertcity', '$toinsertstate', '$toinsertzip')";
	$result = $conn->query($sql);
	//echo nl2br('New account successfully created');	
	//header('Location: /eCommerce-html5up-arcana/signUp.html');	
}
 
$conn->close();

/*
header("Location:{$_SERVER['HTTP_REFERER']}");
exit;
?*/

?>

<script type="text/javascript">
	var wasSuccessful = "<?php echo $isAllowed ?>";
	window.history.go(-1);
	if(wasSuccessful == 1){
		alert("Error: Provided email is already in use");
	}
	else{
		// hard reload		
		alert("Successful sign-up");
		window.open("/eCommerce-html5up-arcana/signUp.html", "_self");
	}
</script>






