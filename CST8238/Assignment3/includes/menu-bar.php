<div class="header-nav animate-dropdown">
    <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="nav-bg-class">
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
	<div class="nav-outer">
		<ul class="nav navbar-nav">
			<li class="active dropdown yamm-fw">
				<a href="index.php" data-hover="dropdown" class="dropdown-toggle">Home</a>

			</li>
      <?php
      //Database connection
      require('./includes/config.php');
      mysqli_select_db($con, $database);
      $sqlQuery = "SELECT * FROM genre";
      $result = mysqli_query($con,$sqlQuery);
      $rowCount2 = mysqli_num_rows($result);
      for($i = 0; $i < $rowCount2; $i++){
        $row2[$i] = mysqli_fetch_row($result);
      }
      ?>

      <?php
      //Display genre
      foreach($row2 as $line){
        echo '<li class="dropdown yamm"><a href="./genre.php?id='.$line[0].'">'.$line[1].'</a></i>';
      }
      ?>

		</ul><!-- /.navbar-nav -->
		<div class="clearfix"></div>
	</div>
</div>


            </div>
        </div>
    </div>
</div>
