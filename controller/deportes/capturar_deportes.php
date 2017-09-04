<?php
require "../../model/controlDB.php";

//Capturamos la funcion
$funcion=$_REQUEST["funcion"];

$p=$_GET["p"];

if($funcion!="eliminar"){
	
	$cod=$_POST["cod"];
	
	$codigo=$_POST["txtcodigo"];
	$nombre=$_POST["txtnombre"];
	$estado=$_POST["txtestado"];
}
//instancia de controlDB
$obj = new controlDB();
//Validamos la Operacion
if($funcion=="modificar"){
	
	$sql="update deportes set d_nombre='$nombre' , d_estado='$estado'  where id=$cod";	
}else if($funcion=="eliminar"){
	$sql="delete from deportes where id='$p'";	
}
else{
	$sql="insert into deportes (d_codigo,d_nombre,d_estado,d_fecha) values ('$codigo','$nombre','$estado',curdate())";

}
$obj->actualizar($sql);
//Redireccionamos a Listado
header("location:../../app/deportes/index.php?z=lista");


?>