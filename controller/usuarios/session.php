<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysql_connect("localhost", "root", "");
// Selecting Database
$db = mysql_select_db("proyecto", $connection);
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select u_correo from  usuario where u_correo='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['u_correo'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: ../../app/home/index.php'); // Redirecting To Home Page
}
?>