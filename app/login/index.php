
<?php
include('../../controller/usuarios/validateuser.php'); //el action del  entrar
if(isset($_SESSION['login_user'])){
header("location: ../home/index.php");//aqui coloco la direccion a donde quiere ir despues de una accion exitosa de logeo
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../ruteo/css/login.css">
<title>Login</title>
<link rel="import"  href="../ruteo/link.html">
</head>
<body>
<section>
<div class="contenedor">
<header>
<div class="ti">
<h3>Inicio de sesión</h3>
</div>
</header>
<div id="login">
<form action="" method="POST" id="miform">
<div class="wallpaper">
<img src="http://www.gadiersistemas.com/img/avatar.png" alt="imagen-usuario" title="Usuario"  />
</div>
<div class="ti">
<label>Nombre de usuario:</label><br><br>
<input type="text" name="u_correo" id="usuario" class="fail" placeholder="Nombre de usuario"/>
</div>
<div class="ti">
<label>Contraseña:</label><br><br>
<input type="password" name="u_contrasena" id="contra" class="fail" placeholder="Ingrese contraseña" />
</div>
<div class="ti">
<input name="submit" id="ingresar" type="submit" value="Login">
<span>
<center>
<div class="cole">
<?php echo $error; ?>
</div>
</center>
</span> 
<!-- qui mostramos los errores de validacion -->

</div>
</form>
</div>
</div>
</section>
</body>
</html>