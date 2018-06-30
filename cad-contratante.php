<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro</title>
</head>
<body>
	<?php

	include 'init.php';

	$nem = mysqli_real_escape_string($conecta, $_POST['email']);
	$npw = mysqli_real_escape_string($conecta, $_POST['pwd']);
	$nname = mysqli_real_escape_string($conecta, $_POST['name']);
	$nend = mysqli_real_escape_string($conecta, $_POST['address']);
	$dian = mysqli_real_escape_string($conecta, $_POST['dia']);
	$mesn = mysqli_real_escape_string($conecta, $_POST['mes']);
	$anon = mysqli_real_escape_string($conecta, $_POST['ano']);
	$ndn = $dian.$mesn.$anon;
	$ncnpj = mysqli_real_escape_string($conecta, $_POST['cpf']);
	$ntel = mysqli_real_escape_string($conecta, $_POST['cel']);
	
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