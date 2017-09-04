<!--menu-->
<?php include ('../../controller/eventos/lista_eventos.php ');?>
<?php include('../../controller/usuarios/session.php') ?><!--aqui incluyo el archivo sesion para obtener mi atributo-->
<!--fin menu-->
<!DOCTYPE html>
<html>
<head>
 
  <link rel="import"  href="../ruteo/link.html">
  <title></title>
  <style type="text/css">
    body{
   background-color:#fff;
background-repeat: no-repeat;
background-position: center center;
background-attachment: fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
    }
  </style>
</head>
<body>
<?php include ("../assets/index.php");?><br><br><br>
<div class="row">
 <div class="col-lg-2 col-sm-4 col-xs-1 col-md-4"></div>
    <div class="col-lg-10 col-sm-8 col-xs-11 col-md-8">
    <div class="container">
<div class="alert alert-info">
  <strong><?php echo $login_session; ?></strong> BIENVENIDO AL SISTEMA SPORT EVENTS
</div>
</div>
     <div class="col-lg-3 col-md-6">
      <div class="panel panel-info">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-3">
              <i class="fa fa-futbol-o fa-5x"></i>
            </div>
            <div class="col-xs-9 text-right">
              <div class="huge"><?php include ("../../controller/querys/can_deportes.php");?></div>
              <div>Deportes</div>
            </div>
          </div>
        </div>
        <a href="../assets/pdfs/deportes.php">
          <div class="panel-footer">
            <span class="pull-left">Reporte</span>
            <span class="pull-right"><i class="fa fa-file-text-o"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-3">
              <i class="fa fa-users fa-5x"></i>
            </div>
            <div class="col-xs-9 text-right">
              <div class="huge"><?php include ("../../controller/querys/can_entrenadores.php");?></div>
              <div>Entrenadores</div>
            </div>
          </div>
        </div>
          <a href="../assets/pdfs/entrenadores.php">
          <div class="panel-footer">
            <span class="pull-left">Reporte</span>
            <span class="pull-right"><i class="fa fa-file-text-o"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="panel panel-danger">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-3">
              <i class="fa fa-futbol-o fa-5x"></i>
            </div>
            <div class="col-xs-9 text-right">
              <div class="huge"><?php include ("../../controller/querys/can_equipos.php");?></div>
              <div>Equipos</div>
            </div>
          </div>
        </div>
       <a href="../assets/pdfs/equipos.php">
          <div class="panel-footer">
            <span class="pull-left">Reporte</span>
            <span class="pull-right"><i class="fa fa-file-text-o"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      <div class="panel panel-warning">
        <div class="panel-heading">
          <div class="row">
            <div class="col-xs-3">
              <i class="fa fa-user fa-5x"></i>
            </div>
            <div class="col-xs-9 text-right">
              <div class="huge"><?php include ("../../controller/querys/can_deportistas.php");?></div>
              <div>Deportistas</div>
            </div>
          </div>
        </div>
        <a href="../assets/pdfs/jugadores.php">
          <div class="panel-footer">
            <span class="pull-left">Reporte</span>
            <span class="pull-right"><i class="fa fa-file-text-o"></i></span>
            <div class="clearfix"></div>
          </div>
        </a>
      </div>
    </div>
    </div> <!--div col-->
    </div><!--div row finish-->
</body>
</html>
