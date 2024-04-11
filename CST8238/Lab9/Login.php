<?php session_start();
ob_start();
require "./elements/MySQLConnectionInfo.php";

$error = "";

if(!isset($_POST["email"]) || !isset($_POST["password"])){
  $error = "<p style='color:red'><i>*Please fill all information</i></p>";
} else{
  if($_POST["email"] != "" && $_POST["password"] != ""){
    $dbConnection = mysqli_connect($host, $username, $password);
    $email_address = $_POST["email"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["password"] = $_POST["password"];
    if ($dbConnection->connect_error) {
			die("Connection failed: " . $dbConnection->connect_error);
		}
    mysqli_select_db($dbConnection, $database);
		$sqlQuery = "SELECT * FROM employee WHERE EmailAddress='$email_address'";
    $result = mysqli_query($dbConnection,$sqlQuery);
    $rowCount = mysqli_num_rows($result);
    if($rowCount == 1){
      $row = mysqli_fetch_row($result);
      if(trim($row[6]) != trim($_POST["password"])){
          $error = "<p style='color:red'><i>!Wrong password or username</i></p>";
      } else{
        //Main body
        $error = "<p>Login successful!</p>";
        header("Location: ./ViewAllEmployees.php");
        exit;
      }
    } else if($rowCount == 0){
      $error = "<p style='color:red'><i>Wrong password or username</i></p>";
    } else{
      $error = "<p style='color:red'><i>Duplicate accounts found, please check the database</i></p>";
    }
    mysqli_close($dbConnection);
  }
}

 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/master.css">
    <title>Lab 9 - Login</title>
  </head>
  <body>
    <?php include './elements/Header.php' ?>
    <?php include './elements/Menu.php' ?>
    <div class="content">
      <h3>Login</h3>
      <form  method="post">
        <fieldset>
          <legend>Login</legend>
          <table>
            <tr>
              <td>Email Address</td>
              <td><input type="email" name="email"></td>
            </tr>
            <tr>
              <td>Password</td>
              <td><input type="password" name="password"></td>
            </tr>
            <tr>
              <td><input type="submit" value="Log in"></td>
            </tr>
          </table>
        </fieldset>
      </form>
      <?php echo $error; ?>
    </div>

    <?php include './elements/Footer.php' ?>

  </body>
</html>
