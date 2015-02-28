<?php
  include('pswd.php');
?>

<html><head><title>Управление сайтом</title>
<link rel="stylesheet" type="text/css" href="../css/main.css">
<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
</head><body>
<?php include('../common/nav.php'); ?>
<div class="clr"></div>
<div id="contentuslugi">
<a href="index.php">На главную Админ-центра</a><br><br>

<?php
require "connect.php";

if(!empty($_GET['id'])){  
  $query="SELECT * FROM other WHERE id=$_GET[id]";
  $result = mysql_query($query);
  $row = mysql_fetch_array($result);
}
//Корректировка
if(isset($_POST['edit'])){
  $query="UPDATE other SET tema='$_POST[tema]',text='$_POST[text]'  WHERE id='$_POST[id]'";
  $result = mysql_query($query);
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
}
if(!empty($_GET['id'])){
  echo ' <input type="submit" name="edit" value="Сохранить">';
}
echo '</tr></table></form>';
?>
</div>
<?php include('../common/footer.php');?>
</body></html>