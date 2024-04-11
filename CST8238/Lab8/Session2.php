<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="./css/master.css">
    <title>Lab 8 - Session2</title>
  </head>
  <body>
    <?php include './elements/Header.php' ?>
    <?php include './elements/Menu.php' ?>
    <div class="Session2 container content">
      <h3>Session2</h3>
      <h4>Your input information:</h4>
      <?php
        echo "<table>";
        echo "<tr><td width='300px'>First Name: </td><td>".(empty($_SESSION['first-name'])?"<i style='color: red'>*MISSING</i>":$_SESSION['first-name'])."</td></tr>";
        echo "<tr><td>Last Name: </td><td>".(empty($_SESSION['last-name'])?"<i style='color: red'>*MISSING</i>":$_SESSION['last-name'])."</td></tr>";
        echo "<tr><td>Telephone Number: </td><td>".(empty($_SESSION['tel-number'])?"<i style='color: red'>*MISSING</i>":$_SESSION['tel-number'])."</td></tr>";
        echo "<tr><td>Email: </td><td>".(empty($_SESSION['email'])?"<i style='color: red'>*MISSING</i>":$_SESSION['email'])."</td></tr>";
        echo "<tr><td>Birth Day: </td><td>".(empty($_SESSION['birthday'])?"<i style='color: red'>*MISSING</i>":$_SESSION['birthday'])."</td></tr>";
        echo "<tr><td>Profession: </td><td>".(empty($_SESSION['profession'])?"<i style='color: red'>*MISSING</i>":$_SESSION['profession'])."</td></tr>";
        echo "<tr><td>Favourite Sports: </td><td>";
        if(empty($_SESSION['sports'])){
          echo "<i style='color: red'>*MISSING</i></td></tr>";
        }else{
          foreach($_SESSION['sports'] as $key => $value){
            if($key == 0){
              echo $value."</td></tr>";
            }else{
              echo "<tr><td></td><td>".$value."</td></tr>";
            }
          }
        }
        echo "</table>";
        ?>
    </div>

    <?php include './elements/Footer.php' ?>

  </body>
</html>
