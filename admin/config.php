<?php 

$hostname_concon = "localhost";
$database_concon = "klinik";
$username_concon = "root";
$password_concon = "";
$koneksi = mysqli_connect($hostname_concon, $username_concon, $password_concon, $database_concon) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
