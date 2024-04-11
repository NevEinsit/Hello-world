<!DOCTYPE html>
<?php session_start();
  $flag = false;
  if(!empty($_POST["first-name"])||!empty($_POST["last-name"])||!empty($_POST["tel-number"])||!empty($_POST["email"])
  ||!empty($_POST["birthday"])||!empty($_POST["profession"])||!empty($_POST["sports"])){
    $flag = true;
  }
  if($flag){
    $_SESSION["first-name"] = $_POST["first-name"];
    $_SESSION["last-name"] = $_POST["last-name"];
    $_SESSION["tel-number"] = $_POST["tel-number"];
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["birthday"] = $_POST["birthday"];
    $_SESSION["profession"] = $_POST["profession"];
    $_SESSION["sports"] = $_POST["sports"];
    header("Location: Session2.php");
    exit;
  }

  ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/master.css">
    <title>Lab 8 - Session1</title>
  </head>
  <body>
    <?php include './elements/Header.php' ?>
    <?php include './elements/Menu.php' ?>
    <div class="Session1 container content">
      <h3>Session1</h3>


        <form method="post" style="margin:10px">
          <fieldset>
            <legend>Personal Information</legend>
            <p><label>First Name:</label><br>
              <input type="text" name="first-name" value="">
            </p>
            <p>
              <label>Last Name:</label><br>
              <input type="text" name="last-name" value="">
            </p>
            <p>
              <label>Telephone Number:</label><br>
              <input type="number" name="tel-number" placeholder="(XXX)XXX-XXXX">
            </p>
            <p>
              <label>Email:</label><br>
              <input type="email" name="email" placeholder="XXXX@XXX.XX">
            </p>
            <p>
              <label>Birth Day:</label><br>
              <input type="date" name="birthday" value="">
            </p>
          </fieldset>
          <fieldset>
            <legend>Profession</legend>
            <input type="radio" name="profession" value="Student">Student <br>
            <input type="radio" name="profession" value="Doctor">Doctor <br>
            <input type="radio" name="profession" value="Farmer">Farmer <br>
            <input type="radio" name="profession" value="Engineer">Engineer <br>
          </fieldset>
          <fieldset>
            <legend>Favourite Sports</legend>
            <select id="sports" name="sports[]" multiple>
              <option value="Football">Football</option>
              <option value="Tennis">Tennis</option>
              <option value="Jogging">Jogging</option>
              <option value="Basketball">Basketball</option>
            </select>
          </fieldset>
          <br>
          <input type="submit">&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="reset">
        </form>


    </div>
    <?php include './elements/Footer.php' ?>

  </body>
</html>
