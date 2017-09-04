<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['u_correo']) || empty($_POST['u_contrasena'])) {
$error="<p style='color:red;'>Favor Llenar los campos!!</p>";

}
else
{
// Define $username and $password
$username=$_POST['u_correo'];
$password=$_POST['u_contrasena'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
// Selecting Database
$db = mysql_select_db("proyecto", $connection);
// SQL query to fetch information of registerd users and finds user match.
$query = mysql_query("select * from usuario where u_contrasena='$password' AND u_correo='$username'", $connection);
$rows = mysql_num_rows($query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: ../../app/home/index.php"); // Redirecting To Other Page
} else {
$error="<p style='color:red;'>Denegado!...Favor verifique sus credenciales!!</p>";
}
mysql_close($connection); // Closing Connection
}
}
?>