<?php

require "MySQLConnectionInfo.php";

$error = "";

if(isset($_POST["updatepersonId"]))
{
	$dbConnection = mysqli_connect($host, $username, $password);
	
	if(!$dbConnection)
		die("Could not connect to the database. ");
	
	mysqli_select_db($dbConnection, $database);
		
	$sqlQuery = "UPDATE person SET FirstName = '".$_POST["updatefirstName"]."', LastName = '".$_POST["updatelastName"]."' WHERE PersonId = '".$_POST['updatepersonId']."'";
	
		
	if (mysqli_query($dbConnection, $sqlQuery)) {
		echo "Person Successfully Updated". "<br>";
	} else {
		echo "Person Could not be updated: " . $sql . "<br>" . mysqli_error($dbConnection);
	}
	
		
	mysqli_close($dbConnection);
}

?>

<html>
	<head>
		<title>MySQL Insert</title>
	</head>
	<body>
		<?php 
			include "MySQLMenu.php";

			echo $error;
		?>
	</body>
</html>