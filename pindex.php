<?php
session_start();

if(!isset($_SESSION['user'])){
	header("location:login.php");
}

else{
	echo "Hello ".$_SESSION['user'];
}

?>

<a href="logout.php">Voltar</a>