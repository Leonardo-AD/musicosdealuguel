<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro</title>
</head>
<body>
	<?php

	include 'init.php';

	$npw = mysqli_real_escape_string($conecta, $_POST['pwd']);
	$nname = mysqli_real_escape_string($conecta, $_POST['name']);
	$nemail = mysqli_real_escape_string($conecta, $_POST['email']);
	$ntel = mysqli_real_escape_string($conecta, $_POST['cel']);
	$nend = mysqli_real_escape_string($conecta, $_POST['address']);
	$ngenero = mysqli_real_escape_string($conecta, $_POST['gen']);
	$dian = mysqli_real_escape_string($conecta, $_POST['dia']);
	$mesn = mysqli_real_escape_string($conecta, $_POST['mes']);
	$anon = mysqli_real_escape_string($conecta, $_POST['ano']);
	$ndn = $dian.$mesn.$anon;
	$ncpf = mysqli_real_escape_string($conecta, $_POST['cpf']);
	$ndescricao=mysqli_real_escape_string($conecta, $_POST['descricao']);

	$cadastrar = "INSERT INTO `MUSICO` (`SENHA`, `NOME`, `EMAIL`, `TELEFONE`, `ENDERECO`, `GENERO_MUSICAL`, `DATA_DE_NASCIMENTO`, `CPF`,`DESCRICAO`) VALUES ('$npw', '$nname', '$nemail', '$ntel', '$nend', '$ngenero', '$ndn', '$ncpf','$ndescricao')"; 
	
	$cadastrou = mysqli_query($conecta, $cadastrar);

	mysqli_close($conecta);
	
    if($cadastrou){
        echo "<script language='javascript' type='text/javascript'>alert('Músico cadastrado com sucesso!');window.location.href='index.php';</script>";
    }
    else{
        echo "<script language='javascript' type='text/javascript'>alert('Dados inválidos. Por favor cadastre-se novamente com um novo e-mail e confirme seus dados!');window.location.href='index.php';</script>";
    die();
    }
	?>
</body>
</html>