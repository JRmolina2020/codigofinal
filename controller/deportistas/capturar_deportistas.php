<?php
require "../../model/controlDB.php";
$funcion=$_REQUEST["funcion"];
$p=$_GET["p"];
if($funcion!="eliminar"){
$cod=$_POST["cod"];
$codigo=$_POST["txtcodigo"];$nombre=$_POST["txtnombre"];$apellido=$_POST["txtapellido"];
$sexo=$_POST["txtsexo"];$edad=$_POST["txtedad"];$direccion=$_POST["txtdireccion"];$telefono=$_POST["txttelefono"];
$carrera=$_POST["txtcarrera"];$semestre=$_POST["txtsemestre"];$idequipo=$_POST["txtidequipo"];
}
$obj = new controlDB();
if($funcion=="modificar"){
$sql="update entrenadores set  e_telefono='$telefono', e_direccion='$direccion'  where identrenadores=$cod";
}else if($funcion=="eliminar"){
$sql="delete from deportista where iddeportista='$p'";
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

$sql="insert into deportista (ni,nombre,apellido,sexo,edad,direccion,telefono,carrera,semestre,idequipo,imagen_depor) 
values ('$codigo','$nombre','$apellido','$sexo','$edad','$direccion','$telefono','$carrera','$semestre','$idequipo','$data')";
} else {
echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
}
}
}
$obj->actualizar($sql);
header("location:../../app/players/index.php?z=lista");
?>
