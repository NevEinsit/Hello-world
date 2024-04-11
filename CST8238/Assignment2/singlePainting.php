<?php include "./var-define.php" ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Assign2 - Single Painting</title>
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/text.css" />
<link rel="stylesheet" href="css/960.css" />

<link rel="stylesheet" href="css/assign2.css" />
</head>

<body>

<div class="container_12">
	<?php require_once("utilities/header.php"); ?>
</div>
<div class="container_12 contentWhite">
	<div class="grid_3">
		<?php require_once("utilities/navigation.php"); ?>
	</div>
	<div class="grid_9">
		<?php

          $row_num = get_paint_by_id($paintings, $_GET['painting-id']);
          $artist_index = get_artist_by_paint($artists, $paintings[$row_num]);
          echo "<img src='./resources/paintings/large/".$_GET['painting-id'].".jpg'>";
          echo "<h2>".$paintings[$row_num][2]."</h2>";
          echo "<br><a href='./singleArtist.php?artist-id=".$artists[$artist_index][0]."''>".$paintings[$row_num][1]."</a>";
          echo "<br><br><p><i>(".$paintings[$row_num][3]."&nbsp;-&nbsp;".$paintings[$row_num][4]."cm&nbsp;X&nbsp;".$paintings[$row_num][5]."cm)</i></p>";
          echo "<p><a href='./index.php?genre=".$paintings[$row_num][9]."'>".$paintings[$row_num][9]."</a></p>";
          echo "<p>".$paintings[$row_num][7]."</p>";
          echo "<p><a href='".$paintings[$row_num][8]."'>".$paintings[$row_num][2]." on wikipedia</a></p>";

     ?>

		</div>
	</div>
</div>
</body>
</html>
