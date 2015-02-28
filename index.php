<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Документ без названия</title>
<link rel="stylesheet" type="text/css" href="css/main.css" />
<link rel="stylesheet" type="text/css" href="css/flipper.css" />
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.mousewheel.min.js"></script>
<script type="text/javascript" src="js/flipper.js"></script>
<script type="text/javascript" src="js/show.js"></script>

<script type="text/javascript">
var lft='';
var flagFlip=0;
$(document).ready(function() {
    $('#bg11').mousewheel(function(e, delta) { slide1(); });
    
    $('#bg12').mousewheel(function(e, delta) { slide2(); });
    $('#fg21').mousewheel(function(e, delta) { slide2(); });
    $('#fg22').mousewheel(function(e, delta) { slide2(); });
    $('#fg23').mousewheel(function(e, delta) { slide2(); });
    $('#fg24').mousewheel(function(e, delta) { slide2(); });
    $('#fg25').mousewheel(function(e, delta) { slide2(); });
    

    $('#bg13').mousewheel(function(e, delta) { slide3(); });
    $('#fg31').mousewheel(function(e, delta) { slide3(); });
    $('#fg32').mousewheel(function(e, delta) { slide3(); });

    $('#bg14').mousewheel(function(e, delta) { slide4(); });
    $('#fg41').mousewheel(function(e, delta) { slide4(); });
    $('#fg42').mousewheel(function(e, delta) { slide4(); });
    $('#fg43').mousewheel(function(e, delta) { slide4(); });
    $('#fg44').mousewheel(function(e, delta) { slide4(); });

});
</script>

</head>

<body>
<?php include('nav.php'); ?>

<div id="page">
    <img id="bg11" src="images/bgparalax1.jpg" >
    <img id="bg12" src="images/bgparalax2.jpg" >
    <img id="bg13" src="images/bgparalax3.jpg" >
    <img id="bg14" src="images/bgparalax4.jpg" >

    <img id="fg21" src="images/fgshow21.png" >
    <img id="fg22" src="images/fgshow22.png" >    
    <img id="fg23" src="images/fgshow23.png" >
    <img id="fg24" src="images/fgshow24.png" >
    <img id="fg25" src="images/fgshow25.png" >
    
    <img id="fg31" src="images/fgshow31.png" >
    <img id="fg31clear" src="images/fgshow31clear.png" >
    <img id="fg32" src="images/fgshow32.png" >
    <img id="fg32clear" src="images/fgshow32clear.png">

    <img id="fg41clear" src="images/fgshow41clear.png">    
    <img id="fg41" src="images/fgshow41.png" >

    <div class="fg11 fh1">Heavy Machinery Parts</div>
    <div class="fg12 fh2">ОО «Heavy Machinery Parts» предлагает к поставке запчасти 
            на спецтехнику для строительных, горно-добывающих организаций.</div>
</div>

<div id="fg42" class="flip-container">
  <div class="flipper">
    <div class="front"> <img src="images/fgshow42.png"> </div>
    <div class="back"> <img src="images/fgshow44back.png"> </div>
  </div>
</div>

<div id="fg43" class="flip-container">
  <div class="flipper">
    <div class="front"> <img src="images/fgshow43.png"> </div>
    <div class="back"> <img src="images/fgshow44back.png"> </div>
  </div>
</div>

<div id="fg44" class="flip-container">
  <div class="flipper">
    <div class="front"> <img src="images/fgshow44.png"> </div>
    <div class="back"> <img src="images/fgshow44back.png"> </div>
  </div>
</div>





<script type="text/javascript">
    
	
</script>

   


</body>
</html>
