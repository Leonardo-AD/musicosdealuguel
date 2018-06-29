<!DOCTYPE html>
<html lang="en">
<head>
  <title>Musicos de aluguel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<h2>Lista de Musicos</h2>


<?php

include 'init.php';

 $conectou = mysqli_query($conecta, "SELECT * FROM MUSICO") or die("erro ao selecionar");

 while($linha = mysqli_fetch_array($conectou)){
        $id = $linha['ID'];
        $nome = $linha['NOME'];
        $sobrenome = $linha['SOBRENOME'];
        $email = $linha['EMAIL'];
        $telefone = $linha['TELEFONE'];
        $genero = $linha['GENERO_MUSICAL'];

        echo "============================================================================<br>";
        echo "Nome : ".$nome."  |  Gênero Musical  ->  ".$genero."  Telefone = ".$telefone."   "."<form method=post action=contratooo.php><input type=hidden value=$id  name=ident><input type=submit value=Contratar></form>";
        echo "============================================================================<br>";
        //echo $sobrenome,PHP_EOL;
        //echo $email,PHP_EOL;
        //echo $telefone,PHP_EOL;
        //echo $genero."<br>";
}
?>
</div>

</body>
</html>
