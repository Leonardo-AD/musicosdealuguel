<?php 

$filename = 'todos.txt';

    $nome = $_POST['novo_nome'];

    if (!file_exists($filename)) {
        touch($filename);
    }

    $data = file($filename);
    $data[$linha] = $nome."\n";
    $data_str = implode('', $data);
    file_put_contents($filename, $data_str);

    header('location: list.php');


?>