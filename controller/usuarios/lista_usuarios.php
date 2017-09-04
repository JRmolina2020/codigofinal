<?php
require "../../model/controlDB.php";
$obj = new controlDB();
$data=$obj->consultar("SELECT * FROM usuario");
?>