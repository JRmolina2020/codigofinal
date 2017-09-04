<?php
require "../../model/controlDB.php";
$obj = new controlDB();
$data=$obj->consultar("SELECT * FROM deportista INNER JOIN equipos ON deportista.idequipo = equipos.idequipo INNER JOIN entrenadores ON entrenadores.identrenadores = equipos.id_entrenadores INNER JOIN deportes ON deportes.id = entrenadores.e_deporte");
?>