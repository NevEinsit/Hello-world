<?php       include "./var-define.php" ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Assign2 - Single Artist</title>
<link rel="stylesheet" href="css/reset.css" />
<link rel="stylesheet" href="css/text.css" />
<link rel="stylesheet" href="css/960.css" />

<link rel="stylesheet" href="css/assign2.css" />
</head>

<body>
<div class="container_12">
	<?php require_once("utilities/header.php"); ?>
	<div class="grid_3">
		<?php require_once("utilities/navigation.php"); ?>
	</div>
	<div class="grid_9">
		<?php
    $artist_row = $artists[get_artist_by_id($artists, $_GET['artist-id'])];
    echo "<img src='./resources/artists/large/".$artist_row[0].".jpg'>";
    echo "<p><h2>".$artist_row[1]."</h2></p>";
    echo "<p>".$artist_row[3]."&nbsp;-&nbsp;".$artist_row[4]."</p>";
    echo "<p><i>(".$artist_row[2].")</i></p>";
    echo "<p>".$artist_row[5]."</p>";
    echo "<p><a href='".$artist_row[6]."'>".$artist_row[1]." on wikipedia</a></p>";
    echo "<h3>Paintings</h3>";
    echo "<ul>";
    foreach($paintings as $row){
      if($artist_row[1] == $row[1]){
        echo "<li><a href='./singlePainting.php?painting-id=".$row[0]."'>".$row[2]."</a></li>";
      }
    }
    echo "</ul>";

     ?>

	</div>
	<div class="clear"> </div>
</div>
</body>
</html>
