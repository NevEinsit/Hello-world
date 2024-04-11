<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Genre</div>
    <nav class="yamm megamenu-horizontal" role="navigation">

        <ul class="nav">
          <?php
          //Database connection
          require('./includes/config.php');
          mysqli_select_db($con, $database);
          $sqlQuery = "SELECT * FROM genre";
          $result = mysqli_query($con,$sqlQuery);
          $rowCount1 = mysqli_num_rows($result);
          for($i = 0; $i < $rowCount1; $i++){
            $row1[$i] = mysqli_fetch_row($result);
          }
          ?>

          <?php
          //Display genre
          foreach($row1 as $line){
            echo '<li class="dropdown menu-item"><a href="./genre.php?id='.$line[0].'">'.$line[1].'</a></i>';
          }
          ?>
</ul>
    </nav>
</div>
