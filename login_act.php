<?php 
session_start();
include 'koneksi.php';
$username=$_POST['username'];
$password=$_POST['password'];
$password=md5($password);
$sql="select username, password from user where username='$username' and password='$password'";
$query=mysqli_query($concon, $sql)or die(mysqli_error());
if(mysqli_num_rows($query)==1){
	$_SESSION['username']=$username;
	header("location:admin/index.php");
}else{
	header("location:home.php?pesan=gagal")or die(mysqli_error());
	// mysql_error();
}
// echo $pas;


 ?>