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

<<<<<<< HEAD
$name = $_POST['novo_nome'];
$filename = "$name.csv";

if(!file_exists($filename)){
	touch($filename);
}
$newn = $_POST['novo_nome'];
$newg = $_POST['novo_genero'];
$data = file($filename);
$data[] = $newn.",".$newg;
$data_str = implode('', $data);
file_put_contents($filename, $data_str);

/*$ng = $newn.",".$newg;
$ngs = file('todos.csv');
$ngs[] = $ng."\n";
$ngs_string = implode('', $ngs);

file_put_contents('todos.csv', $ngs_string);*/

header('location: login.php');
=======
redirect("login.php");
>>>>>>> a94fa9c117e1c97287a887c7e22534ef5b66a9be
?>
<!-- <h1 id="cad">Seja bem vindo, para acessar sua conta clique</h1>

<a href="login.php">
<input id="aq" type="submit" value="Aqui"></a> -->