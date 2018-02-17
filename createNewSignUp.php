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
/*
echo $toinsertfname;
echo $toinsertlname;
echo $toinsertemail;
echo $toinsertpass;
echo $toinsertaddress;
echo $toinsertcity;
echo $toinsertstate;
echo $toinsertzip;
*/
 
$sql = "INSERT INTO customerdata (FirstName, LastName, Email, Password, Address, City, State, Zip) VALUES ('$toinsertfname', '$toinsertlname', '$toinsertemail', '$toinsertpass', '$toinsertaddress', '$toinsertcity', '$toinsertstate', '$toinsertzip')";
$result = $conn->query($sql);
 
$conn->close();

?>
<?php header("Location:{$_SERVER['HTTP_REFERER']}");exit; ?>