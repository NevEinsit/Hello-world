<?php
$set = [1=>"(1+2)/3", 2=>"(-(1^2)+3)" ,3=>"(-1+2)*3",4=>"(-1+2+3)",5=>"1*(2+3)",6=>"(1+2+3)",7=>"(1+2*3)"];
function trial($num){

    for($i = 7; $i > 0; $i--){
        if($num>=$i){
            $mul=$i;
            break;
        }
    }
    $base = floor($num/$mul);
    $mod = $num % $mul;
    if($base < 7){
        if($mod == 0){
            return "(".$base." * ".$mul.")";
        } else {
            if($mod < 7){
                return "(".$base." * ".$mul." + ".$mod.")";
            } else {
                 return "(".$base." * ".$mul." + ".trial($mod).")";
            }
        }
    } else {
        if($mod == 0){
            return "(".trial($base)." * ".$mul.")";
        } else{
            if($mod < 7){
                return "(".trial($base)." * ".$mul." + ".$mod.")";
            } else {
                return "(".trial($base)." * ".$mul." + ".trial($mod).")";
            }
        }
    }
}
if(isset($_POST['num'])){
  $num = $_POST['num'];
  $str = trial($num);
  $target_str = array();
  for($i = 0; $i < strlen($str); $i++){
      if($str{$i} == "1"){
          $target_str[$i] = $set[1];
      }  else if($str{$i} == "2"){
          $target_str[$i] = $set[2];
      } else if($str{$i} == "3"){
          $target_str[$i] = $set[3];
      } else if($str{$i} == "4"){
          $target_str[$i] = $set[4];
      } else if($str{$i} == "5"){
          $target_str[$i] = $set[5];
      } else if($str{$i} == "6"){
          $target_str[$i] = $set[6];
      } else if($str{$i} == "7"){
          $target_str[$i] = $set[7];
      } else {
          $target_str[$i] = $str{$i};
      }
  }
  $result = $num." = ";
  foreach($target_str as $element){
      $result = $result.$element;
  }
}

?>
<html lang="en" dir="ltr">
  <head>
    <title>I can</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../indexPage/css/skill.css">
  </head>
  <body>

    <div class="container col-11">
      <br><br><br>
      <h2>Skills related(Still building)</h2>
      <div class="row">
        <div class="col-sm-5 lang">
          <p><b>Programming languages.....</b></p>
          <ul>
            <li>Java</li>
            <li>HTML/CSS</li>
            <li>C/C++</li>
            <li>PostgreSQL</li>
            <li>Matlab</li>
            <li>Bash Script</li>
            <li>Assembly - Dragon 12</li>
            <li>...</li>
          </ul>
          <p><i>1, 2, 3</i></p>
          <form method="post">

                <input type="text" name="num" value="">
                <br>
                <input type="submit" name="submit" value="1, 2, 3 GO!">



            <p><?php echo $result; ?></p>
          </form>
        </div>
        <div class="col-sm-3">

        </div>
        <div class="col-sm-4 proj">
          <p><b>Projects.....</b></p>
          <ul>
            <li>Calculator(C + Qt) <a href="./appendix/Calculator.zip">Download 1</a>, <a href="https://drive.google.com/open?id=1PRK8P4bou8yfplXmj4ptqqQr26OJHHaE" target="_blank">Download 2</a></li>
            <li>Integer Roman number converter(C/C++)</li>
            <li>3D Printer Form(Java)</li>
            <li>Bank Account System(Java)</li>
            <li>European Option Price Calculator(Matlab)</li>
            <li>Calculator(Bash)</li>
            <li>...</li>
          </ul>
        </div>
      </div>


    </div>
    <br>
  </body>
</html>
