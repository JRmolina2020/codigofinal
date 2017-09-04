			<?php
			require "../../model/controlDB.php";
			$funcion=$_REQUEST["funcion"];
			$p=$_GET["p"];
			if($funcion!="eliminar"){
				$cod=$_POST["cod"];
				$nombre=$_POST["txtnombre"];
				$correo=$_POST["txtcorreo"];
				$contrasena=$_POST["txtcontrasena"];
				$tipo_u=$_POST["txtrol"];
			}
			$obj = new controlDB();
			if($funcion=="modificar"){
				$sql="update usuario set u_correo='$correo', u_contrasena='$contrasena' , rol_user='$tipo_u'  where id=$cod";	
			}else if($funcion=="eliminar"){
				$sql="delete from usuario where id='$p'";
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

						$sql="insert into usuario (u_nombre,u_correo,u_contrasena,rol_user,u_fecha,u_imagen) 
						values ('$nombre','$correo','$contrasena','$tipo_u',curdate(),'$data')";
					} else {
						echo "archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes";
					}
				}
			}
			$obj->actualizar($sql);
			header("location:../../app/usuarios/index.php?z=lista");
			?>
