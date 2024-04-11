<?php   // function change_artists_key($arr, $key){
  //   for($j = 0; $j < 7; $j++){
  //     $arr[$key[$j]] = $arr[$j];
  //     unset($arr[$j]);
  //   }
  // }

  $artists = array();
  $file_handle = fopen("./resources/artists.txt", "r");

  //$artists_key = ["artist-id", "artist-name", "nationality", "year-of-birth", "year-of-death", "description","wikipedia-link"];
  $i = 0;
  while (!feof($file_handle) ) {
    $line_of_text = fgets($file_handle);
    $artists[$i] = explode('~', $line_of_text);
    // change_artists_key($artists[$i], $artists_key);
    $i++;
  }
  fclose($file_handle);

  $paintings = array();
  $file_handle = fopen("./resources/paintings.txt", "r");
  $i = 0;
  while (!feof($file_handle) ) {
    $line_of_text = fgets($file_handle);
    $paintings[$i] = explode('~', $line_of_text);
    $paintings[$i][9] = trim($paintings[$i][9]);
    $i++;
  }
  fclose($file_handle);

  function get_paint_by_id($arr, $key){
    $i = 0;
    foreach($arr as $arr_row){
      if($arr[$i][0] == $key){
        return $i;
      }
      $i++;
    }
  }

  function get_artist_by_id($arr, $key){
    $i = 0;
    foreach($arr as $arr_row){
      if($arr[$i][0] == $key){
        return $i;
      }
      $i++;
    }
  }

  function get_artist_by_paint($artist, $paint){
    $i = 0;
    foreach($artist as $sub){
      if($sub[1] == $paint[1]){
        return $i;
      }
      $i++;
    }
  }



  ?>
