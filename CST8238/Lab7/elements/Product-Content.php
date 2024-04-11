<div class="product container content">
  <h3>Product</h3>
  <?php
    //Sub-Task 1
    $Product = ["Printer"=>[["Brand"=>"Epson", "Quantity"=>100, "Price"=>2500],
                            ["Brand"=>"Canon", "Quantity"=>100, "Price"=>3000],
                            ["Brand"=>"Xerox", "Quantity"=>500, "Price"=>2000]],
                "Laptop"=>  [["Brand"=>"Apple", "Quantity"=>200, "Price"=>2000],
                            ["Brand"=>"HP", "Quantity"=>300, "Price"=>1500],
                            ["Brand"=>"Toshiba", "Quantity"=>100, "Price"=>1200]],
                "TV"=>      [["Brand"=>"Samsung", "Quantity"=>500, "Price"=>1200],
                            ["Brand"=>"LG", "Quantity"=>500, "Price"=>1050],
                            ["Brand"=>"Sony", "Quantity"=>200, "Price"=>1000]],
                          ];
   ?>
  <div class="subtask">
    <h4>Sub-Task 2</h4>
    <div class="subtask-container">
      <p><?php
            echo "<h4 style='color:blue'>Product - Output using var_dump</h4><p>";
            var_dump($Product);
            echo "</p>";
       ?>
      </p>
    </div>
  </div>
  <div class="subtask">
    <h4>Sub-Task 3</h4>
    <div class="subtask-container">
      <p><?php
            echo "<h4 style='color:blue'>Product - formatted output</h4><p>";
            foreach($Product as $lv1_key=>$lv1_value){
              echo "<br><b><u>".$lv1_key."</u></b><br><br>";
              foreach($lv1_value as $lv2){
                foreach($lv2 as $lv3_key=>$lv3_value){
                  echo "&nbsp;&nbsp;&nbsp;&nbsp;".$lv3_key." : ".$lv3_value."<br>";
                }
                echo "<br>";
              }
            }
            echo "</p>";
       ?>
      </p>
    </div>
  </div>
</div>
