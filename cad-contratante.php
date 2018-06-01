<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro</title>
</head>
<body>
	<?php

	include 'init.php';

	$nem = $_POST['email'];
	$npw = $_POST['pwd'];
	$nname = $_POST['name'];
	$nend = $_POST['address'];
	$dian = $_POST['dia'];
	$mesn = $_POST['mes'];
	$anon = $_POST['ano'];
	$ndn = $dian.$mesn.$anon;
	$ncnpj = $_POST['cpf'];
	$ntel = $_POST['cel'];
	
	$cadastrar = "INSERT INTO `CONTRATANTE` (`EMAIL`, `SENHA`, `NOME`, `ENDERECO`, `CNPJ`, `DATA_DE_NASCIMENTO`, `TELEFONE`) VALUES ('$nem', '$npw', '$nname', '$nend', '$ncnpj', '$ndn', '$ntel')";
	$cadastrou = mysqli_query($conecta, $cadastrar);

	mysqli_close($conecta);

    if($cadastrou){
        echo "<script language='javascript' type='text/javascript'>alert('Contratante cadastrado com sucesso!');window.location.href='index.php';</script>";
    }
    else{
        echo "<script language='javascript' type='text/javascript'>alert('Dados inválidos. Por favor cadastre-se novamente com um novo e-mail e confirme seus dados!');window.location.href='index.php';</script>";
    die();
    }
	?>
</body>
</html>