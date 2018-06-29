<?php

session_start();

$conecta = mysqli_connect('localhost', 'id5300911_musicosdealuguel', 'projeto2018') or die ("Erro ao conectar ao banco");
$db = mysqli_select_db($conecta, "id5300911_musicos");

function login ($user, $pw){
	$users = file('users-pws.txt');
	for ($i=0;$i<sizeof($users);$i++){
		$users[$i] = trim($users[$i]);
	}
	$usuario = $user."-".$pw;

	if(in_array($usuario, $users)) {
    $_SESSION['user'] =  $user;
    return true;
  }
  return false;
}

function logado() {
    return isset($_SESSION['user-logged']);
}

function logout() {
    unset($_SESSION['user']);
    session_destroy();
    header('location:index.php');
}

function redirect($pagina) {
	header('location: ' . $pagina);
}

?>