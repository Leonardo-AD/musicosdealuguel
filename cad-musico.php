<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro</title>
</head>
<body>
	<?php

	include 'init.php';

	$npw = $_POST['pwd'];
	$nname = $_POST['name'];
	$nemail = $_POST['email'];
	$ntel = $_POST['cel'];
	$nend = $_POST['address'];
	$ngenero = $_POST['gen'];
	$dian = $_POST['dia'];
	$mesn = $_POST['mes'];
	$anon = $_POST['ano'];
	$ndn = $dian.$mesn.$anon;
	$ncpf = $_POST['cpf'];

	$cadastrar = "INSERT INTO `MUSICO` (`SENHA`, `NOME`, `EMAIL`, `TELEFONE`, `ENDERECO`, `GENERO_MUSICAL`, `DATA_DE_NASCIMENTO`, `CPF`) VALUES ('$npw', '$nname', '$nemail', '$ntel', '$nend', '$ngenero', '$ndn', '$ncpf')"; 
	
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