<!DOCTYPE html>
<html>
<head>
	<title>HMP</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<script type="text/javascript" src="../js/jquery-1.11.2.min.js"></script>
  <script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
  <script type="text/javascript">
var myMap;
 
// Дождёмся загрузки API и готовности DOM.
ymaps.ready(init);
function init () {
    // Создание экземпляра карты и его привязка к контейнеру с
    // заданным id ("map").
    myMap = new ymaps.Map('map', {
        // При инициализации карты обязательно нужно указать
        // её центр и коэффициент масштабирования.
        center: [43.237190,76.894136], 
        zoom: 17
    }),
      myGeoObject = new ymaps.GeoObject({
            // Описание геометрии.
            geometry: {
                type: "Point",
                coordinates: [43.237190,76.894136]
            },  
            // Свойства.
            properties: {
                // Контент метки.
                iconContent: 'Наш офис',
                hintContent: ''
            }
        }, {
            // Опции.
            // Иконка метки будет растягиваться под размер ее содержимого.
            preset: 'islands#blackStretchyIcon',
            // Метку можно перемещать.
            draggable: true
        });  
        myMap.geoObjects
        .add(myGeoObject);            
}
</script>
</head>
<body>
<?php include('../common/nav.php'); ?>
<div class="clr"></div>
<div id="contentuslugi">
      <?php 
      if(!empty($_GET['id'])){  
      	require "../admin/connect.php";
        $query="SELECT * FROM other WHERE id=$_GET[id]";
        $result = mysql_query($query);
        $row = mysql_fetch_array($result);
        echo'<div class="title">',$row['tema'],'</div>' ;
        echo'<div id="col1">';
        echo $row['text'] ;
      } 
      ?>
    </div>  
    <div id="col23">
      <div id="map"></div>    
    </div>
</div>
<?php include('../common/footer.php');?>

</body>
</html>
