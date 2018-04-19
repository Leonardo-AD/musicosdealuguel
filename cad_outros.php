<link rel="stylesheet" type="text/css" href="estilo.css">
<?php

include 'init.php';

$newn = $_POST['novo_nome'];
$newg = $_POST['nova_genero'];

$user_new = $newu."-".$newg;
$name_user = $_SESSION['user'];


if(!file_exists($filename)){
	touch($filename);
}
$data = file($filename);
$data[] = $newn.",".$newg;
$data_str = implode('', $data);
file_put_contents($filename, $data_str);

header("location:login.php");
?>