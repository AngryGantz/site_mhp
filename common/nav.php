<!-- SmartMenus jQuery init -->
<script type="text/javascript">
	$(function() {
		$('#main-menu').smartmenus({
			mainMenuSubOffsetX: -1,
			subMenusSubOffsetX: 10,
			subMenusSubOffsetY: 0
		});
	});
</script>
<!-- SmartMenus core CSS (required) -->
<link href="../css/sm-core-css.css" rel="stylesheet" type="text/css" />
<!-- "sm-simple" menu theme (optional, you can use your own CSS, too) -->
<link href="../css/sm-clean/sm-clean.css" rel="stylesheet" type="text/css" />
<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="../js/jquery.smartmenus.js"></script>
		<div id="header">
			<div id="logo"></div>
			<ul id="main-menu" class="sm sm-clean">
				<li><a href="../index.php">Главная</a> </li>
				<img class="imgsep" src="../images/msep.png">
				<li><a href="../front/about.php?id=1">О компании</a> </li>
				<img class="imgsep" src="../images/msep.png">
				<li><a href="#">Продукция</a>
					<ul>
						<?php
						  require "../admin/connect.php";	
						  $query = "SELECT * FROM production ORDER by date DESC";
						  $result = mysql_query($query);
						  while($row = mysql_fetch_array($result,MYSQL_BOTH)){;
						    echo '<li><a href="../front/production.php?id=',$row['id'],'">',$row['tema'],'</a></li>';
						  }
						?>
					</ul>
				</li>
				<img class="imgsep" src="../images/msep.png">
				<li><a href="../front/about.php?id=2">Услуги</a> 
				</li>
				<img class="imgsep" src="../images/msep.png">
				<li><a href="../front/articles.php">Статьи</a> </li>
				<img class="imgsep" src="../images/msep.png">
				<li><a href="../front/contacts.php?id=3">Контакты</a> </li>
			</ul>
		</div>