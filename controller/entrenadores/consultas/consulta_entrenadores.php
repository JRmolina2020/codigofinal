<?php 
function Conectar2(){
	$conn =null;
	$host='localhost';
	$db='proyecto';
	$user='root';
	$pwd='';

	try {
		$conn =new PDO('mysql:host='.$host.';dbname='.$db,$user,$pwd);
	} catch (Exception $e) {
		echo "error al conetar".$e;
		exit;
	}
	return $conn;
}
?>

 