<?php

class controlDB{

	function __construct(){
		
		try{
		//Declarando Variables
		
		$host="localhost";
		$db_name="proyecto";
		$usuario="root";
		$pass="";
		
		//Cadena Conexion
		$this->con=mysqli_connect($host,$usuario,$pass) or die ("Error en la Conexion a la BBDD");
	
		//Seleccion de BBDD
		mysqli_select_db($this->con,$db_name) or die ("No se ah encontrado la BBDD");	
		
		//echo "Conexion Exitosa";
			
		}catch(Exception $ex){
			throw $ex;
		}
	}
	
	//SELECT
	function consultar($sql){
	
		$res=mysqli_query($this->con,$sql);
		$data=null;
		
			while($fila=mysqli_fetch_assoc($res)){
			
					$data[]=$fila;
			}
		return $data;

	}
	
	//INSERT , DELETE , UPDATE
	
	function actualizar($sql){
	
		$res=mysqli_query($this->con,$sql);
		
		if(mysqli_affected_rows($this->con)<=0){
		
			echo "No se pudo Realizar lo pedido";	
			
		}else{
			
			echo "Se ah Realizado los Cambios Correctamente";
			}

	}
	
	
}


?>