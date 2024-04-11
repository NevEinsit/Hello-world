<!DOCTYPE html>
<?php function time_check(){
  date_default_timezone_set('America/New_York');
  if(date('H')  < 12){
    return true;
  } else{
    return false;
  }
}

function condition_output($arg1, $arg2, $arg3){
  if(empty($arg1) && empty($arg2) && empty($arg3)){
    echo "You did not supply any names";
    return;
  }
  if(!empty($arg1)){
    if(!empty($arg2) && !empty($arg3)){
      echo (time_check() ? "Good morning" : "Good day");
      echo " ".$arg1." ".$arg2." ".$arg3;
      echo "! Your middle name is very unique.";
    } elseif(empty($arg2) && empty($arg3)){
      echo (time_check() ? "Good morning" : "Good day");
      echo " ".$arg1." ".$arg2." ".$arg3;
      echo "! You did not provide middle and last name.";
    } elseif(empty($arg2) && !empty($arg3)){
      echo (time_check() ? "Good morning" : "Good day");
      echo " ".$arg1." ".$arg2." ".$arg3;
      echo "! You did not provide middle name.";
    }else{
      echo (time_check() ? "Good morning" : "Good day");
      echo ", Welcome to the World of PHP";
    }
  } else{
    echo (time_check() ? "Good morning" : "Good day");
    echo ", Welcome to the World of PHP";
  }
}

?>

<html lang="" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Output Page</title>
  </head>
  <body>
    <p><?php echo condition_output($_POST["first-name"], $_POST["middle-name"], $_POST["last-name"]);?>
    </p>
  </body>
</html>
