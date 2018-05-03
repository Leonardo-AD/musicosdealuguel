<?php

include 'init.php';

$a = $_POST['novo_nome'];
$b = $_POST['novo_genero'];
$linha = $_POST['linha'];

$u = $_SESSION['user'];

$filename = $u . '.csv';

$data = file($filename);
$data[$linha] = $a.','.$b;
$data_str = implode(",", $data);
file_put_contents($filename, $data_str);

header('location:piu.php');
?>