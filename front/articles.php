<!DOCTYPE html>
<html>
<head>
	<title>HMP</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
</head>
<body>
<?php include('../common/nav.php'); ?>
<div class="clr"></div>
<div id="contentuslugi">
	<div class="title"> Статьи </div>
	<div id="col4">
<?php
  require "../admin/connect.php";	
  $query = "SELECT * FROM article ORDER by date DESC";
  $result = mysql_query($query);
  
  while($row = mysql_fetch_array($result,MYSQL_BOTH)){;
    echo '<a href="article.php?id=',$row['id'],'">',$row['tema'],'</a><br><br>';
  }
?>
	
	</div>
</div>
<?php include('../common/footer.php');?>

</body>
</html>
