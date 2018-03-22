<?php
session_start();

$usuario = $_POST['usuário'];
$senha = $_POST['senha'];


$u = file("users.txt");
$s = file("pw.txt");

for($i=0 ; $i < sizeof($u); $i++){
	$u[$i] = trim($u[$i]);
}

for($i=0; $i<sizeof($s); $i++){
	$s[$i] = trim($s[$i]);
}

$user = array_search($usuario, $u);
$pws = array_search($senha, $s);

if ($user == $pws && in_array($usuario , $u)) {
	$_SESSION['user'] = $usuario ;
	header("location:pindex.php");
}

else{
	header("location:login.php");
}
?>