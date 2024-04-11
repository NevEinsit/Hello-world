<?php

require "MySQLConnectionInfo.php";

$error = "";

if(!isset($_POST['personId']))
{
	$error = "Person could not be deleted.";
}
else
{
	$dbConnection = mysqli_connect($host, $username, $password);
	
	if(!$dbConnection)
		die("Could not connect to the database.");
	
	mysqli_select_db($dbConnection, $database);
	
	$sqlQuery = "DELETE FROM person WHERE PersonId = ".$_POST['personId'];
	
	if (mysqli_query($dbConnection, $sqlQuery)) {
		echo "Deleted Succesfully.". "<br>";
	} else {
		echo "Person Could Not Be Deleted -: " . $sql . "<br>" . mysqli_error($dbConnection);
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