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
    <table width="90%" >
     <?php foreach($data as $fila){?>
      <tr>
        <td bgcolor="#4F8FAF"><strong>Identificacion</strong></td>
        <td bgcolor="#4F8FAF"><strong>Nombre</strong></td>
        <td bgcolor="#4F8FAF"><strong>Apellido</strong></td>
        <td bgcolor="#4F8FAF"><strong>Sexo</strong></td>
        <td bgcolor="#4F8FAF"><strong>Direccion</strong></td>
        <td bgcolor="#4F8FAF"><strong>Telefono</strong></td>
      </tr>';
      $consulta=mysql_query("SELECT * FROM deportista INNER JOIN equipos WHERE deportista.idequipo =equipos.idequipo");
      while($dato=mysql_fetch_array($consulta)){
        $codigoHTML.='
        <tr>
          <td>'.$dato['ni'].'</td>
          <td>'.$dato['nombre'].'</td>
          <td>'.$dato['apellido'].'</td>
          <td>'.$dato['sexo'].'</td>
          <td>'.$dato['direccion'].'</td>
          <td>'.$dato['telefono'].'</tr>
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
  $dompdf->stream("Lista de deportistas.pdf");
  ?>