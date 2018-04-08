<?php

require("./PHPMailer/src/PHPMailer.php");
require("./PHPMailer/src/SMTP.php");

// Retrieves the web information
$thefullname =  $_POST["fullname"];
$theemailaddress =  $_POST["emailaddress"];
$themessage = $_POST["message"];

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
    $mail->Subject = $thefullname . " (" . $theemailaddress .") Contacted You";
    $mail->Body = $themessage;
    $mail->AddAddress("prettypattiesbiz@gmail.com");

     if(!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
     } else {
        echo "Message has been sent";
     }
	 
// "jake.wilson1007@gmail.com"
	 
?>

<script type="text/javascript">
	function alertMessage(theMessage){
		window.setTimeout( function (){alert(theMessage)}, 0);
	}
	alert("Message Sent")
	window.open("/eCommerce-html5up-arcana/contactUs_page.php", "_self");
</script>