			<?php
			require "../../model/controlDB.php";
			$funcion=$_REQUEST["funcion"];
			$p=$_GET["p"];
			if($funcion!="eliminar"){
				$cod=$_POST["cod"];
				$nombre=$_POST["txtnombre"];
				$id_deportes=$_POST["txtiddeportes"];
				$id_entrenadores=$_POST["txtidentrenadores"];
			}
			$obj = new controlDB();
			if($funcion=="modificar"){

				$sql="update equipos set  eq_nombre='$nombre' ,id_entrenadores='$id_entrenadores' where idequipo=$cod";

			}else if($funcion=="eliminar"){
				$sql="delete from equipos where idequipo='$p'";
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

						$sql="insert into equipos (eq_nombre,eq_imagen,id_deportes,id_entrenadores,eq_fecha) 
						values ('$nombre','$data','$id_deportes','$id_entrenadores',curdate())";

					} else {
						echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
					}
				}
			}
			$obj->actualizar($sql);
			header("location:../../app/equipos/index.php?z=lista");
			?>
