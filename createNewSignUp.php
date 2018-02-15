<?php
			//Step1
			 $db = mysqli_connect('localhost','admin','password','test')
			 or die('Error connecting to MySQL server.');

			//Step2
			$query = "SELECT * FROM customerdata";
			mysqli_query($db, $query) or die('Error querying database.');
			
			$result = mysqli_query($db, $query);
			$row = mysqli_fetch_array($result);

			while ($row = mysqli_fetch_array($result)) {
				echo $row['First Name'] . ' ' . $row['Last Name']'<br />';
			}
			//Step 4
			mysqli_close($db);
?>