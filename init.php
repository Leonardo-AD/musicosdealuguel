<?php

session_start();

$conecta = mysqli_connect('localhost', 'musicos', 'projeto2018') or die ("Erro ao conectar ao banco");
$db = mysqli_select_db($conecta, "musicos");

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
    unset($_SESSION['EMAIL']);
}

function redirect($pagina) {
	header('location: ' . $pagina);
}

?>