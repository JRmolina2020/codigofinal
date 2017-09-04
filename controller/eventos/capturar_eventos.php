	<?php
	require "../../model/controlDB.php";
	$funcion=$_REQUEST["funcion"];
	$p=$_GET["p"];
	if($funcion!="eliminar"){
		$cod=$_POST["cod"];
		$codigo=$_POST["txtcodigo"];
		$nombre=$_POST["txtnombre"];
		$lugar=$_POST["txtlugar"];
		$feho=$_POST["txtfeho"];
		$categoria=$_POST["txtcategoria"];
}
$obj = new controlDB();
if($funcion=="modificar"){
	$sql="update eventos set  nombre_eve='$nombre',lugar_eve='$lugar', feho_eve='$feho'   where ideventos=$cod";
}else if($funcion=="eliminar"){
	$sql="delete from eventos where ideventos='$p'";
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

			$sql="insert into eventos (codigo_eve,nombre_eve,lugar_eve,feho_eve,categoria_eve,imagen_eve) 
			values ('$codigo','$nombre','$lugar','$feho','$categoria','$data')";

		} else {
			echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
		}
	}
}
$obj->actualizar($sql);
header("location:../../app/eventos/index.php?z=lista");
?>
