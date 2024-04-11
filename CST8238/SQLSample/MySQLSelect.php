<?php

require "MySQLConnectionInfo.php";

?>

<html>
	<head>
		<title>MySQL Insert</title>
	</head>
	<body>
		<?php 
			include "MySQLMenu.php";

			$dbConnection = mysqli_connect($host, $username, $password);
			
			if(!$dbConnection)
				die("Could not connect to the database. Remember this will only run on the Playdoh server.");
			
			mysqli_select_db($dbConnection, $database);
			
			$sqlQuery = "SELECT * FROM person";		
				
			$result = mysqli_query($dbConnection,$sqlQuery);
			
			$rowCount = mysqli_num_rows($result);
			
			if($rowCount == 0)
				echo "*** There are no rows to display from the Person table ***";
			else
			{
				for($i=0; $i<$rowCount; ++$i)
				{
					$row = mysqli_fetch_row($result);
										
					echo "<table><tr><td>";										
					echo "<br />";					
					echo "<form action=\"MySQLDelete.php\" method=\"post\">";		
						echo "<input type=\"hidden\" name=\"personId\" value=\"".$row[0]."\" />";
						echo "<input type=\"submit\" name=\"deleteButton\" value=\"Delete Person\" />";
					echo "</form>";	
					
					echo "<form action=\"MySQLUpdate.php\" method=\"post\">";							
						echo "<input type=\"hidden\" name=\"personId\" value=\"".$row[0]."\" />";
						echo "<input type=\"hidden\" name=\"firstName\" value=\"".$row[1]."\" />";	
						echo "<input type=\"hidden\" name=\"lastName\" value=\"".$row[2]."\" />";	
						echo "<input type=\"submit\" name=\"editButton\" value=\"Edit Person\" />";
					echo "</form>";
					echo "</td>";
					
					echo "<td>";					
					echo "First Name: ".$row[1]."<br />";
					echo "Last Name: ".$row[2]."<br />";	
					echo "</td></tr></table>";
					
					echo "<br />";
				}
			}
			
			mysqli_close($dbConnection);
		?>		
	</body>
</html>