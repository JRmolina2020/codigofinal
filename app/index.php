<?php
require "../model/controlDB.php";
$obj = new controlDB();
$data1=$obj->consultar("SELECT * FROM eventos INNER JOIN deportes WHERE deportes.id = eventos.categoria_eve");
$data2=$obj->consultar("SELECT * FROM entrenadores");
$data4=$obj->consultar("SELECT * FROM equipos");
$data3=$obj->consultar("SELECT * FROM deportista INNER JOIN equipos ON deportista.idequipo = equipos.idequipo INNER JOIN entrenadores ON entrenadores.identrenadores = equipos.id_entrenadores INNER JOIN deportes ON deportes.id = entrenadores.e_deporte");
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Sport Events</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link href="ruteo/unique/css/bootstrap-responsive.css" rel="stylesheet">
<link href="ruteo/unique/css/style.css" rel="stylesheet">
<link href="ruteo/unique/color/default.css" rel="stylesheet">
<link rel="ruteo/unique/shortcut icon" href="img/favicon.ico">
<style type="text/css">
	.section-equipo{
	 background-image:url(assets/images/fondo_login.jpg);
background-repeat: no-repeat;
background-position: center center;
background-attachment: fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
	}
	.section-eventos{
	 background-image:url(assets/images/fondo_login.jpg);
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
<!-- navbar -->
<div class="navbar-wrapper">
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<!-- Responsive navbar -->
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
				</a>
				<h1 class="brand"><a href="index.html">Sport Events</a></h1>
				<!-- navigation -->
				<nav class="pull-right nav-collapse collapse">
				<ul id="menu-main" class="nav">
					<li><a title="blog" href="#blog">Eventos</a></li>
					<li><a title="blog" href="#services">Equipos</a></li>
					<li><a title="team" href="#about">Acerca de</a></li>
					<li><a title="blog" href="login">Iniciar Sesion</a></li>
				</ul>
				</nav>
			</div>
		</div>
	</div>
</div>
<!-- Header area -->
<div id="header-wrapper" class="header-slider">
	<header class="clearfix">
		<div>
			<img src="assets/images/descarga.jpg" alt=""/>
		</div>
	</header>
</div>

<section id="blog" class="section-eventos">
<div class="container">
	<h4>Eventos Proximo</h4>
	<!-- Three columns -->
	<div class="row">
	 <?php foreach($data1 as $fila){?>
		<div class="span3">
			<div class="home-post">
				<div class="post-image">
					<img class="max-img" src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen_eve']);?>" alt="" />
				</div>
				<div class="post-meta">
					
					<span class="date"><?php echo $fila["feho_eve"]?></span>
					<span class="tags"><a href="#"><?php echo $fila["d_nombre"]?></a>, <a href="#"></a></span>
				</div>
				<div class="entry-content">
					<h5><strong><a href="#"><?php echo $fila["nombre_eve"]?></a></strong></h5>
					
					<h6 class="more"><?php echo $fila["lugar_eve"]?></h6>
				</div>
			</div>
		</div>
		<?php }?>
	</div>
</section>

<section id="services" class="section-equipo">
<div class="container">
	<h4>Equipos</h4>
	<!-- Four columns -->
	<div class="row">
	<?php foreach($data4 as $fila){?>
		<div class="span3 animated-fast flyIn">
			<div class="service-box">
				<img src="data:image/jpg;base64,<?php echo base64_encode($fila['eq_imagen']);?>" alt="" />
				<h2><?php echo $fila["eq_nombre"]?> </h2>
			</div>
		</div>
		<?php }?>
	</div>
</div>
</section>

<section id="about" class="section">
<div class="container">
	<h4>Acerca De</h4>
	<div class="row">
		<div class="span4 offset1">
			<div>
				<h2>Sport <strong>Events</strong></h2>
				<p>
					Sport Events, es una plataforma web diseñada para la gestión de eventos y procesos administrativos del área de deportes en la institución de educación superior UPC(Universidad popular del cesar)
				</p>
			</div>
		</div>
		<div class="span6">
			<div class="aligncenter">
				<img src="ruteo/unique/img/Sport_Event2.png" alt="" /><br><br>
			</div>
		</div>
	</div>
	<div class="row">
		<h3 class="text-center"><br>Integrantes del Equipo</br></h3><br><br>
		<div class="span2 offset3 flyIn">
			<div class="people">
				<img class="team-thumb img-circle" src="ruteo/unique/img/team/img-1.jpg" alt="" />
				<h3>Ruben Ramirez</h3>
				<p>
					Supervisor de proyecto.
				</p>
			</div>
		</div>
		<div class="span2 flyIn">
			<div class="people">
				<img class="team-thumb img-circle" src="ruteo/unique/img/team/img-2.jpg" alt="" />
				<h3>Faber Lidueñaz</h3>
				<p>
					Asistencia
				</p>
			</div>
		</div>
		<div class="span2 flyIn">
			<div class="people">
				<img class="team-thumb img-circle" src="ruteo/unique/img/team/img-3.jpg" alt="" />
				<h3>Rodolfo Molina</h3>
				<p>
					Desarrollador fullstack. 
				</p>
			</div>
		</div>
	</div>
</div>
</section>

<footer>
<div class="container">
	<div class="row">
		<div class="span6 offset3">
			<p class="copyright">
				2017 &copy; Ti Digital. Todos los derechos reservados.
			</p>
		</div>
	</div>
</div>

</footer>
<a href="#" class="scrollup"><i class="icon-angle-up icon-square icon-bgdark icon-2x"></i></a>
<script src="ruteo/unique/js/jquery.js"></script>
<script src="ruteo/unique/js/jquery.scrollTo.js"></script>
<script src="ruteo/unique/js/jquery.nav.js"></script>
<script src="ruteo/unique/js/jquery.localscroll-1.2.7-min.js"></script>
<script src="ruteo/unique/js/bootstrap.js"></script>
<script src="ruteo/unique/js/jquery.prettyPhoto.js"></script>
<script src="ruteo/unique/js/isotope.js"></script>
<script src="ruteo/unique/s/jquery.flexslider.js"></script>
<script src="ruteo/unique/js/inview.js"></script>
<script src="ruteo/unique/js/animate.js"></script>
<script src="ruteo/unique/js/validate.js"></script>
<script src="ruteo/unique/js/custom.js"></script>
<script src="ruteo/unique/contactform/contactform.js"></script>
</body>
</html>