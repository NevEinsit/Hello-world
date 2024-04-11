<?php
session_start();
ob_start();
require "./elements/MySQLConnectionInfo.php";
$dbConnection = mysqli_connect($host, $username, $password);

if(!$dbConnection)
    die("Could not connect to the database. Remember this will only run on the Playdoh server.");

mysqli_select_db($dbConnection, $database);
$email_address = $_SESSION['email'];
$sqlQuery = "SELECT * FROM employee WHERE EmailAddress='$email_address'";
$result = mysqli_query($dbConnection,$sqlQuery);
$rowCount = mysqli_num_rows($result);

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/master.css">
    <title>Lab 9 - View All Employees</title>
  </head>
  <body>
    <?php include './elements/Header.php' ?>
    <?php include './elements/Menu.php' ?>
    <?php  if($rowCount == 1){
      $row = mysqli_fetch_row($result);
      if(trim($row[6]) == trim($_SESSION["password"])){?>
    <div class="content">
      <h3>View All Employees</h3>
      <div class="subtask">
        <h4>Session State Data</h4>
        <div class="subtask-container">
          <?php
              echo "<table>";
              echo "<tr><td width='300px'>First Name: </td><td>".$row[1]."</td></tr>";
              echo "<tr><td>Last Name: </td><td>".$row[2]."</td></tr>";
              echo "<tr><td>Telephone Number: </td><td>".$row[4]."</td></tr>";
              echo "<tr><td>Email: </td><td>".$row[3]."</td></tr>";
              echo "<tr><td>SIN: </td><td>".$row[5]."</td></tr>";
              echo "<tr><td>Password: </td><td>".$row[6]."</td></tr>";
              echo "</table>";
            ?>
        </div>
      </div>
      <div class="subtask">
        <h4>Database Data</h4>
        <div class="subtask-container">
          <?php $dbConnection = mysqli_connect($host, $username, $password);

    			if(!$dbConnection)
    				die("Could not connect to the database. Remember this will only run on the Playdoh server.");

    			mysqli_select_db($dbConnection, $database);

    			$sqlQuery = "SELECT * FROM employee";

    			$result = mysqli_query($dbConnection,$sqlQuery);

    			$rowCount = mysqli_num_rows($result);

    			if($rowCount == 0)
    				echo "*** There are no rows to display from the Employee table ***";
    			else
    			{
            echo "<table style='text-align:left';><tr><th>First Name</th><th>Last Name</th><th>Email Address</th><th>Phone Number</th><th>SIN</th><th>Password</th></tr>";
    				for($i=0; $i<$rowCount; ++$i)
    				{
    					$row = mysqli_fetch_row($result);

    					echo "<tr><td width='10%'>".$row[1]."</td>";
              echo "<td width='10%'>".$row[2]."</td>";
              echo "<td width='20%'>".$row[3]."</td>";
              echo "<td width='15%'>".$row[4]."</td>";
              echo "<td width='10%'>".$row[5]."</td>";
              echo "<td width='20%'>".$row[6]."</td></tr>";

    				}
            echo "</table>";
    			}
          	mysqli_close($dbConnection);
        } else{
            echo "<div class='content'>";
            echo "<h4>You are not logged in, redirecting to the login page...</h4></div>";
            include './elements/Footer.php';
            header("Refresh: 3; URL=./Login.php");
            exit;
          }
        }else{
            echo "<div class='content'>";
            echo "<h4>You are not logged in, redirecting to the login page...</h4></div>";
            include './elements/Footer.php';
            header("Refresh: 3; URL=./Login.php");
            exit;
          }



          ?>
        </div>

      </div>

    </div>

    <?php include './elements/Footer.php' ?>

  </body>
</html>
