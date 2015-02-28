<?php
  include('pswd.php');
?>

	<title>HMP</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
</head>
<body>
<?php include('../common/nav.php'); ?>

<div class="clr"></div>
<div id="contentuslugi">
	<div class="title"> Управление сайтом </div>
	<div id="col4">
	<p><a href="article.php">Управление разделом "Статьи"</a></p>
	<p><a href="production.php">Управление разделом "Продукция"</p>
	<p><a href="about.php?id=1">Редактирование статьи "О  компании"</p>
	<p><a href="about.php?id=2">Редактирование статьи "Услуги"</p>
	<p><a href="about.php?id=3">Редактирование статьи "Контакты"</p>
</div>
<?php include('../common/footer.php');?>

</body>
</html>

