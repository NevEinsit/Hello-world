<div id="genreListing">
	<h2>Genres</h2>
	<ul class="secondaryList">
		<li><a href="./index.php?genre=Art+Nouveau">Art Nouveau</a></li>
		<li><a href="./index.php?genre=Cubism">Cubism</a></li>
		<li><a href="./index.php?genre=Fauvism">Fauvism</a></li>
		<li><a href="./index.php?genre=Impressionism">Impressionism</a></li>
	  <li><a href="./index.php?genre=Post-Impressionism">Post-Impressionism</a></li>
		<li><a href="./index.php?genre=Romanticism">Romanticism</a></li>
	</ul>
</div>

<div id="artistListing">
	<h2>Artists</h2>
	<ul class="secondaryList">
		<?php
			foreach($artists as $line){
			echo "<li><a href='./singleArtist.php?artist-id=".$line[0]."''>".$line[1]."</a></li>";
		} ?>

	</ul>
</div>
