<?php
  include('pswd.php');
?>

<?php
if(isset($_POST["clear"])){
	 header("Location: article.php"); 
}
?>

<html><head><title>Админка</title>
<link rel="stylesheet" type="text/css" href="../css/main.css">
<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
</head><body>
<?php include('../common/nav.php'); ?>
<div class="clr"></div>
<div id="contentuslugi">

<a href="index.php">На главную Админ-центра</a><br><br>
<form method="post">
<input type="submit" name="clear" value="Сброс">
</form>

<br>
<p>Добавьте новую статью или с помощью поиска по заголовку выведете существующие для удаления или редактирования.<br>
Если нажать на кнопку "Поиск" при пустом поле, вы получите список всех статей сайта.
</p>
<form method="post">
Поиск статьи по части заголовка.<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="find" value="">
<input type="submit" name="search" value="Поиск">
</form>
<?php


require "connect.php";



if(isset($_POST["search"])){
  echo '<table>';
   
  $search=trim($_POST["find"]);
  $query = "SELECT * FROM article WHERE tema LIKE '%$search%' ORDER by id DESC";
  $result = mysql_query($query);
  echo'<p>Кликните на номер статьи для вывода её на редактирование или удаление</p>';
  while($row = mysql_fetch_array($result,MYSQL_BOTH)){;
    echo '<tr><td><a href="?id=',$row['id'],'">',$row['id'],'</a></td><td>',$row['tema'],'</td></tr>';
  }
  exit();
}
if(!empty($_GET['id'])){  
  $query="SELECT * FROM article WHERE id=$_GET[id]";
  $result = mysql_query($query);
  $row = mysql_fetch_array($result);
}
// Добавление
if(isset($_POST['insert'])){
  $query="INSERT INTO article (tema,text) VALUES ('$_POST[tema]','$_POST[text]')";
  mysql_query($query);
}
//Корректировка
if(isset($_POST['edit'])){
  $query="UPDATE article SET tema='$_POST[tema]',text='$_POST[text]'  WHERE id='$_POST[id]'";
  $result = mysql_query($query);
  unset($row);  
}
//Удаление
if(isset($_POST['delete'])){
  $query="DELETE FROM article WHERE id='$_POST[id]'";
  mysql_query($query);
  unset($row);
}
// А это форма редактирования записи

if(isset($row['id'])) {
echo<<<HERE
<form method="post"><table border="0">
<tr><td>№</td><td>$row[id]</td></tr>
<tr><td>Заголовок</td><td><input type="text" size=60 name="tema" value='$row[tema]'></td></tr>
<tr><td>Статья</td><td><textarea name="text" cols=160 rows=2>$row[text]</textarea>
<script type="text/javascript">
CKEDITOR.replace( 'text');
</script>

</td></tr>
<input type="hidden" name="id" value='$_GET[id]'>
<tr><td></td><td>
HERE;
} else {
echo<<<HERE
<form method="post"><table border="0">
<tr><td>Заголовок</td><td><input type="text" size=60 name="tema"></td></tr>
<tr><td>Статья</td><td><textarea name="text" cols=180 rows=2></textarea>
<script type="text/javascript">
CKEDITOR.replace( 'text');
</script>
</td></tr>
<input type="hidden" name="id">
<tr><td></td><td>
HERE;

}

if(!empty($_GET['id'])){
  echo ' <input type="submit" name="edit" value="Сохранить">';
  echo ' <input type="submit" name="delete" value="Удалить">';
}else{
  echo '<input type="submit"name="insert" value="Добавить">';
}
echo '</tr></table></form>';
?>
</div>
<?php include('../common/footer.php');?>
</body></html>