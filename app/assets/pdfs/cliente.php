<?php 
require_once("pdf/dompdf_config.inc.php");
$conexion = mysql_connect("localhost","root","");
mysql_select_db("proyecto",$conexion);

$codigoHTML='
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lista</title>
</head>
<body>
<center><img src="logo.png"><br></center>
<br>
<div align="center">
<table width="95%" >
 <?php foreach($data as $fila){?>
  <tr>
    <td bgcolor="#4F8FAF"><strong>idcliue</strong></td>
    <td bgcolor="#4F8FAF"><strong>Nombre</strong></td>
    <td bgcolor="#4F8FAF"><strong>Estado</strong></td>
    <td bgcolor="#4F8FAF"><strong>Fecha apertura</strong></td>
  </tr>';
  $consulta=mysql_query("SELECT * FROM deportes");
  while($dato=mysql_fetch_array($consulta)){
    $codigoHTML.='
    <tr>
      <td>'.$dato['d_codigo'].'</td>
      <td>'.$dato['d_nombre'].'</td>
      <td>'.$dato['d_estado'].'</td>
      <td>'.$dato['d_fecha'].'</tr>
      </tr>';
    } 
    $codigoHTML.='
  </table>
</div>
</body>
</html>';
$codigoHTML=utf8_decode($codigoHTML);
$dompdf=new DOMPDF();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit","128M");
$dompdf->render();
$dompdf->stream("Lista de deportes.pdf");
?>