
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta name="description" content="">
 <meta name="author" content="">
 <title>Sport events</title>
 <link href="../ruteo/unique/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 <link rel="import" href="../ruteo/js/link.html">
 <link rel="stylesheet" type="text/css" href="../ruteo/css/menu.css">
 <style type="text/css">
   .navbar-inverse{
    background-color:#f5f5f5;
    box-shadow:2px 2px 2px #888;
    color:black;
   }
 </style>
</head>
<body>
 <div id="throbber" style="display:none; min-height:120px;"></div>
 <div id="noty-holder"></div>
 <div id="wrapper">
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
   <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
     <span class="sr-only">Toggle navigation</span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
     <span class="icon-bar"></span>
    </button>
    <div class="container">
    <div class="row">
    <div class="col-lg-1">
    <a class="navbar-brand" href="../home">
     <img src="../assets/images/logo.png" alt="LOGO"">
    </a>
    </div>
    <div class="col-lg-4"><br>
    </div>
    </div>
   </div>
  <div class="collapse navbar-collapse navbar-ex1-collapse">
   <ul class="nav navbar-nav side-nav">
    <li><a href="../home"><i class="fa fa-fw fa-home"></i>Inicio</a>
    <li>
     <a href="../deportes" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-futbol-o"></i>Deportes <i class="fa fa-fw fa-angle-left pull-right"></i></a>
    </li>
    <li><a href="../entrenadores"><i class="fa fa-fw fa-users"></i>Entrenadores<i class="fa fa-fw fa-angle-left pull-right"></i></a></li>
    <li><a href="../equipos"><i class="fa fa-fw fa-check"></i>Equipos</a>
     <li><a href="../players"><i class="fa fa-fw fa-group"></i>Deportistas</a>
     <li><a href="../eventos"><i class="fa fa-fw fa-calendar"></i>Eventos</a>
      <li><a href="../usuarios"><i class="fa fa-fw fa-user"></i>Usuario</a>
       <li><a href="../../controller/usuarios/logout.php"><i class="fa fa-fw fa-remove"></i>Salir</a>
    </li>
   </ul>
  </div>
 </nav>
</div>
</body>
</html>
