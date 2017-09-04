<?php
require "../../model/controlDB.php";
$obj = new controlDB();
$data=$obj->consultar("SELECT   *
    FROM equipos INNER JOIN deportes
            ON equipos.id_deportes = deportes.id
         INNER JOIN entrenadores 
            ON entrenadores.identrenadores = equipos.id_entrenadores");
?>