<div class="arrays content">
  <h3>Arrays</h3>
  <div class="subtask">
    <h4>Sub-Task 1</h4>
    <div class="subtask-container">
      <p><?php $noKeyArray = ["Mon", "Tues", "Wed", "Thu", "Fri"];
            echo "<h4 style='color:blue'>No Key Array - Output using var_dump</h4><p>";
            var_dump($noKeyArray);
            echo "</p><h4 style='color:blue'>No Key Array - Output using foreach</h4><p>";
            foreach($noKeyArray as $key => $value){
              echo "Key: ".$key.", Value: ".$value.", Key data type: ".gettype($key)."<br>";
            }
            echo "</p>";
       ?>
      </p>
    </div>
  </div>
  <div class="subtask">
    <h4>Sub-Task 2</h4>
    <div class="subtask-container">
      <p><?php $stringKeyArray = ["var1"=>"Mon", "var2"=>"Tues", "var3"=>"Wed", "var4"=>"Thu", "var5"=>"Fri"];
            echo "<h4 style='color:blue'>String Key Array - Output using var_dump</h4><p>";
            var_dump($stringKeyArray);
            echo "</p><h4 style='color:blue'>String Key Array - Output using foreach</h4><p>";
            foreach($stringKeyArray as $key => $value){
              echo "Key: ".$key.", Value: ".$value.", Key data type: ".gettype($key)."<br>";
            }
            echo "</p>";
       ?>
      </p>
    </div>
  </div>
  <div class="subtask">
    <h4>Sub-Task 3</h4>
    <div class="subtask-container">
      <p><?php $intKeyArray = [0=>"Mon", 2=>"Tues", 3=>"Wed", 5=>"Thu", 10=>"Fri"];
            echo "<h4 style='color:blue'>Integer Key Array - Output using var_dump</h4><p>";
            var_dump($intKeyArray);
            echo "</p><h4 style='color:blue'>Integer Key Array - Output using foreach</h4><p>";
            foreach($intKeyArray as $key=>$value){
              echo "Key: ".$key.", Value: ".$value.", Key data type: ".gettype($key)."<br>";
            }
            echo "</p>";
        ?>
      </p>
    </div>
  </div>
  <div class="subtask">
    <h4>Sub-Task 4</h4>
    <div class="subtask-container">
      <p><?php $mixedKeyArray = [0=>"Mon", 2=>"Tues", "Three"=>"Wed", 5=>"Thu", "Ten"=>"Fri"];
            echo "<h4 style='color:blue'>Mixed Key Array - Output using var_dump</h4><p>";
            var_dump($mixedKeyArray);
            echo "</p><h4 style='color:blue'>Mixed Key Array - Output using foreach</h4><p>";
            foreach($mixedKeyArray as $key=>$value){
              echo "Key: ".$key.", Value: ".$value.", Key data type: ".gettype($key)."<br>";
            }
            echo "</p>";
        ?>
      </p>
    </div>
  </div>
  <div class="subtask">
    <h4>Sub-Task 5</h4>
    <div class="subtask-container">
      <p><?php $multiDimensionArray = [[0=>"Mon", 2=>"Tues"], ["Three"=>"Wed", 5=>"Thu"], ["Ten"=>"Fri", 19=>"Sat"]];
            echo "<h4 style='color:blue'>Multi-dimensional Array - Output using var_dump</h4><p>";
            var_dump($multiDimensionArray);
            echo "</p><h4 style='color:blue'>Multi-dimensional Array - Output using foreach</h4><p>";
            foreach($multiDimensionArray as $lv1_key=>$lv1_value){
              echo "Level 1 Key: ".$lv1_key.", Key data type: ".gettype($lv1_key)."<br>";
              foreach($lv1_value as $lv2_key=>$lv2_value){
                echo "&nbsp;&nbsp;&nbsp;&nbsp;Level 2 Key: ".$lv2_key.", Value: ".$lv2_value.", Key data type: ".gettype($lv2_key)."<br>";
              }
            }
            echo "</p>";
        ?>
      </p>
    </div>
  </div>

  <br>
</div>
