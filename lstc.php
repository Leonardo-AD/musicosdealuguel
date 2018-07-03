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
   <?php include "cabecalho-log.php"; ?><br>
   <br> 
<div class="container">
<h2>Seus Contratos</h2>

<?php

 include 'init.php';
 
 //$id = $_POST['id'];

$user = $_SESSION['user'];

$identificar = mysqli_query($conecta, "SELECT ID FROM MUSICO WHERE EMAIL = '$user'") or die("erro ao selecionar");
while($linha = mysqli_fetch_array($identificar)){
    $id = $linha['ID'];
}
$conectou = mysqli_query($conecta, "SELECT * FROM CONTRATOS WHERE ID_M = '$id'") or die("erro ao selecionar");

while($linha = mysqli_fetch_array($conectou)){
            $id = $linha['ID'];
            $local = $linha['LOCAL'];
            $dia = $linha['DIA'];
            $mes = $linha['MES'];
            $ano = $linha['ANO'];
    
            echo "============================================================================<br>";
            echo "local : ".$local."  data : ".$dia." / ".$mes." / ".$ano."<br>";
            echo "============================================================================<br>";
            //echo $sobrenome,PHP_EOL;
            //echo $email,PHP_EOL;
            //echo $telefone,PHP_EOL;
            //echo $genero."<br>";
}
?>

</div>
</div>
</div>
<?php 
    include 'rodape.php';
  ?>
</div>
</body>
</html>
