<?php function hist_print($arg){
  for($i = 0; $i < $arg; $i+=5){
    echo "*";
  }
} ?>
<?php
  $count0 = 0;
  $count1 = 0;
  $count2 = 0;
  $count3 = 0;
  $count4 = 0;
  for($count = 0; $count < 500; $count++){
    $value = rand(1, 50);
    switch (floor(($value - 1)/10)) {
      case '0':
        $count0++;
        break;
      case '1':
        $count1++;
        break;
      case '2':
        $count2++;
        break;
      case '3':
        $count3++;
        break;
      case '4':
        $count4++;
        break;
    }
  }
 ?>

<div class="random container content">
  <h3>Random</h3>
  <p><?php echo "$count0" ?> numbers are randomly generated in the range between 01 - 10</p>
  <p><?php echo "$count1" ?> numbers are randomly generated in the range between 11 - 20</p>
  <p><?php echo "$count2" ?> numbers are randomly generated in the range between 21 - 30</p>
  <p><?php echo "$count3" ?> numbers are randomly generated in the range between 31 - 40</p>
  <p><?php echo "$count4" ?> numbers are randomly generated in the range between 41 - 50</p>
  <br>
  <p>Histogram of stars as a percentage of the number of values are displayed below</p>
  <p>01 - 10: <?php hist_print($count0) ?></p>
  <p>11 - 20: <?php hist_print($count1) ?></p>
  <p>21 - 30: <?php hist_print($count2) ?></p>
  <p>31 - 40: <?php hist_print($count3) ?></p>
  <p>41 - 50: <?php hist_print($count4) ?></p>
</div>
