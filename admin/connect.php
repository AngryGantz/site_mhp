<?php
  $DBASE = mysql_connect("localhost","root", "") or die("Could not connect: " . mysql_error());
  mysql_select_db("mhp") or die("Could not select database");
  mysql_query("SET NAMES UTF-8");
?>