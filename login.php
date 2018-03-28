<?php
include ("connection.php");
$conn = Connect();

$toinsertemail = $_POST["Email"];
$toinsertpass =  $_POST["Password"];

$hash = password_hash($toinsertpass, PASSWORD_DEFAULT);

$sqlcheckemail = "SELECT * FROM customerdata WHERE Email='$toinsertemail' AND Password='$hash'";
$customername = "SELECT FirstName FROM customerdata WHERE Email='$toinsertemail'";
$amountwithsameemail = $conn->query($sqlcheckemail);
$numentries = mysqli_num_rows($amountwithsameemail);
$accountthere = $numentries > 0;
if ($accountthere == true) {
	$return = "<font color=#008000><Center><b>**Successful Login**</b></Center></font>";
} else {
	$return = "<font color=#ff0000><Center><b>**Failed Login**</b></Center></font>";
}
print($return);
?>