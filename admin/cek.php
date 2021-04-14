<?php 
ob_start();
if(!isset($_SESSION['username'])){
	header("location:../home.php");
}
?>