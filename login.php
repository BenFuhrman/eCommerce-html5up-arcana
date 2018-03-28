<?php
include ("connection.php");
$conn = Connect();

$toinsertemail = $_POST["Email"];
$toinsertpass =  $_POST["Password"];

$hash = password_hash($toinsertpass, PASSWORD_DEFAULT);

$sqlcheckemail = "SELECT * FROM customerdata WHERE Email='$toinsertemail' && Password='$hash'";
$amountwithsameemail = $conn->query($sqlcheckemail);
$numentries = mysqli_num_rows($amountwithsameemail);
$isAllowed = $numentries > 0;
?>