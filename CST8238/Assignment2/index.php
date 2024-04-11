<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php include "./var-define.php" ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Assign2-Home Page of Art Gallery</title>
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
    <?PHP
      function print_row($artists, $arr){

        echo "<tr><td rowspan='3'><img src='./resources/paintings/square-tiny/".$arr[0].".jpg'></td>";
        echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;<a href='./singlePainting.php?painting-id=".$arr[0]."'>".$arr[2]."</a></td>";
        echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;<a href='./singleArtist.php?artist-id=".$artists[get_artist_by_paint($artists, $arr)][0]."'>".$arr[1]."</a></td></tr>";
        echo "<tr><td></td><td></td></tr><tr><td></td><td></td></tr>";
      }

      echo "<table>";
      if(empty($_GET['genre'])){
        foreach($paintings as $sub_lv){
          print_row($artists, $sub_lv);
        }
      }else{
        foreach($paintings as $sub_lv){
          (strcmp($sub_lv[9], $_GET['genre']) == 0)?print_row($artists, $sub_lv):"";
        }
      }

      echo "</table>";





      ?>

	</div>
	<div class="clear"> </div>
</div>
</body>
</html>
