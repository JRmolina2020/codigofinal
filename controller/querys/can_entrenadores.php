<?php
$sql = mysql_connect("localhost", "root", "");
mysql_select_db("proyecto", $sql);
$sql = "SELECT * FROM entrenadores";  
$result = mysql_query($sql);
$numero = mysql_num_rows($result); 
echo ' '.$numero.'';
?>

