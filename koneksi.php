<?php
$hostname_concon = "localhost"; // ALAMAT IP SERVER KITA	 
$database_concon = "klinik";    // NAMA DATABASE
$username_concon = "root";		// USERNAME
$password_concon = "";			// PASSWORD	
//DI BAWAH INI ADALAH SCRIPT UNTUK DAPAT TERKONEKSI DG DATABASE
$concon = mysqli_connect($hostname_concon, $username_concon, $password_concon, $database_concon) or trigger_error(mysql_error(),E_USER_ERROR); 
?>


