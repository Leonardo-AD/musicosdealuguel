<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contrato</title>
</head>
<body>
    
<?php
    
    include "init.php";
    
    $id_m = $_SESSION['id'];
    $id_c = 1;
    $nome_m = "musico";
    $nome_c = "voce";
    $local = $_POST['local'];
    $hora = $_POST['Hora'];
    $dia = $_POST['dia'];
    $mes = $_POST['mes'];
    $ano = $_POST['ano'];
    
    var_dump($local_m);
 
	
	/*mysqli_query($conecta,  "INSERT INTO CONTRATOS (ID_M, ID_C, NOME_M, NOME_C, LOCAL, HORARIO, DIA, MES, ANO) VALUES ('$id_m', '$id_c', '$nome_m', '$nome_c', '$local', '$hora', '$dia', '$mes', '$ano')");

	mysqli_close($conecta);
	
	header('location:index.php');*/
	

?>

</body>
</html>