<?php

include 'init.php';

 $conectou = mysqli_query($conecta, "SELECT * FROM MUSICO") or die("erro ao selecionar");

 while($linha = mysqli_fetch_array($conectou)){
            $nome = $linha['NOME'];
            $sobrenome = $linha['SOBRENOME'];
            $email = $linha['EMAIL'];
            $telefone = $linha['TELEFONE'];
            $genero = $linha['GENERO_MUSICAL'];

            echo $nome,PHP_EOL;
            echo $sobrenome,PHP_EOL;
            echo $email,PHP_EOL;
            echo $telefone,PHP_EOL;
            echo $genero,PHP_EOL;
}

?>