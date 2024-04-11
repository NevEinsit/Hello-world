<?php
session_start();
ob_start();
require "./elements/MySQLConnectionInfo.php";

$error = "";

if(!isset($_POST["first-name"]) || !isset($_POST["last-name"]) || !isset($_POST["tel"]) || !isset($_POST["email"]) || !isset($_POST["password"]) || !isset($_POST["sin"]))
{
	$error = "<p style='color:red'><i>*Please fill all information</i></p>";
}
else
{
	if($_POST["first-name"] != "" && $_POST["last-name"] != "" && $_POST["tel"] != "" && $_POST["email"] != "" && $_POST["password"] != "" && $_POST["sin"] != "")
	{
		$dbConnection = mysqli_connect($host, $username, $password);

		// Check connection
		if ($dbConnection->connect_error) {
			die("Connection failed: " . $dbConnection->connect_error);
		}
		echo "Connected successfully" . "<br>";

		mysqli_select_db($dbConnection, $database);


		$sqlQuery = "INSERT INTO employee (FirstName, LastName, EmailAddress, TelephoneNumber, SocialInsuranceNumber, Password) VALUES('".$_POST["first-name"]."', '".$_POST["last-name"]."', '".$_POST["email"]."', '".$_POST["tel"]."', '".$_POST["sin"]."', '".$_POST["password"]."')";


		if (mysqli_query($dbConnection, $sqlQuery)) {
			echo "Employee Successfully Added". "<br>";
			$_SESSION["first-name"] = $_POST["first-name"];
			$_SESSION["last-name"] = $_POST["last-name"];
			$_SESSION["tel"] = $_POST["tel"];
			$_SESSION["email"] = $_POST["email"];
			$_SESSION["sin"] = $_POST["sin"];
			$_SESSION["password"] = $_POST["password"];
			header("Location: ./ViewAllEmployees.php");
			exit;
		} else {
			echo "Employee Could not be added: " . $sql . "<br>" . mysqli_error($dbConnection);
		}

		mysqli_close($dbConnection);
	}
	else
		$error = "<p style='color:red'><i>*Please fill all information</i></p>";
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/master.css">
    <title>Lab 9 - Create Account</title>
  </head>
  <body>
    <?php include './elements/Header.php' ?>
    <?php include './elements/Menu.php' ?>
    <div class="content">
      <h3>Create Account</h3>
      <form method="post" style="margin:10px">
        <fieldset>
          <legend>Create your new account</legend>
          <p>Please fill in all information</p>
          <table>
            <tr>
              <td>First Name</td>
              <td><input type="text" name="first-name"></td>
            </tr>
            <tr>
              <td>Last Name</td>
              <td><input type="text" name="last-name"></td>
            </tr>
            <tr>
              <td>Email Address</td>
              <td><input type="email" name="email"></td>
            </tr>
            <tr>
              <td>Phone Number</td>
              <td><input type="tel" name="tel"></td>
            </tr>
            <tr>
              <td>SIN</td>
              <td><input type="number" name="sin"></td>
            </tr>
            <tr>
              <td>Password</td>
              <td><input type="password" name="password"></td>
            </tr>
            <tr>
              <td><input type="submit" value="Submit Information"></td>
            </tr>
          </table>
        </fieldset>
      </form>
      <?php
        echo $error;
       ?>
    </div>

    <?php include './elements/Footer.php' ?>

  </body>
</html>
