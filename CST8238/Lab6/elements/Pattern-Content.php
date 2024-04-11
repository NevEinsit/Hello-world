<?php function pattern_print($arg){
  echo "<p style='line-height: 0px'>";
  for($i = 0; $i < $arg; $i++){
    if($arg%2 == 0){
      print("*");
    }else{
      print("$");
    }
  }
  echo "</p>";
} ?>

<div class="pattern container content">
  <h3>Pattern</h3>
  <?php for($count = 10; $count > 0; $count--){
    pattern_print($count);
  } ?>
</div>
