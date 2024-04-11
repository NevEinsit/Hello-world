<?php

require "MySQLConnectionInfo.php";

$error = "";

if(!isset($_POST["firstName"]) || !isset($_POST["lastName"]))
{
	$error = "Please enter a first and last name.";
}
else
{
	if($_POST["firstName"] != "" && $_POST["lastName"] != "")
	{		
		$dbConnection = mysqli_connect($host, $username, $password);	
		
		// Check connection
		if ($dbConnection->connect_error) {
			die("Connection failed: " . $dbConnection->connect_error);
		}
		echo "Connected successfully" . "<br>";		
				
		mysqli_select_db($dbConnection, $database);
		
		$sqlQuery = "INSERT INTO person (FirstName, LastName) VALUES('".$_POST["firstName"]."', '".$_POST["lastName"]."')";
		
		if (mysqli_query($dbConnection, $sqlQuery)) {
			echo "Person Successfully Added". "<br>";
		} else {
			echo "Person Could not be added: " . $sql . "<br>" . mysqli_error($dbConnection);
		}
		
		mysqli_close($dbConnection);
	}
	else	
		$error = "Please enter a first and last name.";	
}

?>

<html>
	<head>
		<title>MySQL Insert</title>
	</head>
	<body>
		<?php 
			include "MySQLMenu.php";
		?>			
		<form action="MySQLInsert.php" method="post">
			First Name: <input type="text" name="firstName" />
			<br />
			Last Name: <input type="text" name="lastName" />
			<br />
			<br />
			<input type="submit" value="Submit to Database" />
		</form>
		<br />
		<br />
		<?php 
			echo $error;
		?>		
	</body>
</html>

