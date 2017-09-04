<?php
require "../../model/controlDB.php";
$obj = new controlDB();
$data=$obj->consultar("SELECT * FROM eventos INNER JOIN deportes WHERE deportes.id = eventos.categoria_eve");
?>