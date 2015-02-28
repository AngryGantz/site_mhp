			<div id="col3">
				<ul>
						<?php
						  require "../admin/connect.php";	
						  $query = "SELECT * FROM production ORDER by date DESC";
						  $result = mysql_query($query);
						  while($row = mysql_fetch_array($result,MYSQL_BOTH)){;
						    echo '<li><a href="production.php?id=',$row['id'],'">',$row['tema'],'</a></li>';
						  }
						?>
				</ul>
				<hr>
				<p></p>
				<img src="../images/atlas.png" >
				<img src="../images/caterpillar.png" >
				<img src="../images/cummins.png" >
				<img src="../images/komatsu.png" >
				<img src="../images/terex.png" >
			</div>
