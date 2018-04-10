<?php

include 'init.php';

$newu = $_POST['novo_email'];
$newp = $_POST['nova_senha'];
$user_new = $newu."-".$newp;

$users = file("users-pws.txt");
$users[] = $user_new."\n";
$users_string = implode('', $users);

file_put_contents('users-pws.txt', $users_string);

echo "usuario cadastrado";

?>

<a href="login.php">Acessar</a>