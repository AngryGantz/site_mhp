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
<?php 
if(!empty($_GET['id'])){  
	require "../admin/connect.php";
  $query="SELECT * FROM article WHERE id=$_GET[id]";
  $result = mysql_query($query);
  $row = mysql_fetch_array($result);
  echo'<div class="title">',$row['tema'],'</div>' ;
  echo'<div id="col4">';
  echo $row['text'] ;
}

?>

</div>
<?php include('../common/footer.php');?>

</body>
</html>
