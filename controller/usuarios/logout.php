
<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location:../../app/login/index.php"); // a donde quiero ir cuando el usuario de SALIR DE LA APP
}
?>