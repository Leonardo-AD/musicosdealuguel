<link rel="stylesheet" type="text/css" href="estilo.css">
<?php

include 'init.php';

$newu = $_POST['novo_login'];
$newp = $_POST['nova_senha'];
$user_new = $newu."-".$newp;

$users = file("users-pws.txt");
$users[] = $user_new."\n";
$users_string = implode('', $users);

file_put_contents('users-pws.txt', $users_string);

header("location:login.php");
?>
<!-- <h1 id="cad">Seja bem vindo, para acessar sua conta clique</h1>

<a href="login.php">
<input id="aq" type="submit" value="Aqui"></a> -->