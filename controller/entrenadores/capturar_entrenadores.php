<?php
require "../../model/controlDB.php";
$funcion=$_REQUEST["funcion"];
$p=$_GET["p"];
if($funcion!="eliminar"){
$cod=$_POST["cod"];
$codigo=$_POST["txtcodigo"];
$nombre=$_POST["txtnombre"];
$apellido=$_POST["txtapellido"];
$sexo=$_POST["txtsexo"];
$telefono=$_POST["txttelefono"];
$direccion=$_POST["txtdireccion"];
$deporte=$_POST["txtdeporte"];
$estado=$_POST["txtestado"];
}
$obj = new controlDB();
if($funcion=="modificar"){
$sql="update entrenadores set  e_telefono='$telefono',e_codigo='$codigo', e_direccion='$direccion'  where identrenadores=$cod";
}else if($funcion=="eliminar"){
$sql="delete from entrenadores where identrenadores='$p'";
}
else{
if ( !isset($_FILES["imagen"]) || $_FILES["imagen"]["error"] > 0){
echo "ha ocurrido un error";
} else {
$permitidos = array("image/jpg", "image/jpeg", "image/gif", "image/png");
$limite_kb = 16384;
if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
$imagen_temporal  = $_FILES['imagen']['tmp_name'];
$tipo = $_FILES['imagen']['type'];
$fp     = fopen($imagen_temporal, 'r+b');
$data = fread($fp, filesize($imagen_temporal));
fclose($fp);
$data = mysql_escape_string($data);

$sql="insert into entrenadores (e_codigo,e_nombre,e_apellido,e_sexo,e_telefono,e_direccion,e_deporte,e_estado,e_ingreso,e_imagen) 
values ('$codigo','$nombre','$apellido','$sexo','$telefono','$direccion','$deporte','$estado',curdate(),'$data')";
} else {
echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
}
}
}
$obj->actualizar($sql);
header("location:../../app/entrenadores/index.php?z=lista");
?>
