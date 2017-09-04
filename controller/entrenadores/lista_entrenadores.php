<?php
require "../../model/controlDB.php";
$obj = new controlDB();
$data=$obj->consultar("SELECT * FROM entrenadores INNER JOIN deportes WHERE deportes.id = entrenadores.e_deporte");
?>