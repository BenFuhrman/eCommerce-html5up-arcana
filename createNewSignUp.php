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
	$_SESSION["name"] = $toinsertfname;
	//echo $result;
}
 
$conn->close();

require("./PHPMailer/src/PHPMailer.php");
require("./PHPMailer/src/SMTP.php");

// Retrieves the web information

// Prints the retrieved information
echo $thefullname;
echo nl2br("\n");
echo $theemailaddress;
echo nl2br("\n");
echo $themessage;

	// Send email
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); // enable SMTP

    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "prettypattiesbiz@gmail.com";
    $mail->Password = "PHPMYSQL";
    $mail->SetFrom("prettypattiesbiz@gmail.com");
    $mail->Subject = "Thank you for signing up for our website!";
    $mail->Body = "Hello " . $toinsertfname . ", 
		Thank you for signing up for our website. You can view our products on the shop page. 
		If you need to contact us for any reason, you can do so through the Contact Us page on our website.
		-Pretty Patties";
    $mail->AddAddress("$toinsertemail");

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
	 
// "jake.wilson1007@gmail.com"
	 
?>

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
		window.open("/eCommerce-html5up-arcana/signUp_page.php", "_self");
	}

</script>






