<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro</title>
</head>
<body>
	<?php

	include 'init.php';

	$npw = $_POST['senha'];
	$nname = $_POST['nome'];
	$nsn = $_POST['sobrenome'];
	$nemail = $_POST['email'];
	$ntel = $_POST['telefone'];
	$nend = $_POST['endereco'];
	$ngenero = $_POST['genero'];
	$ndn = $_POST['data'];
	$ncpf = $_POST['cpf'];

	$cadastrar = "INSERT INTO `MUSICO` (`SENHA`, 'NOME', 'SOBRENOME', 'EMAIL', 'TELEFONE', 'ENDERECO', 'GENERO', 'DATA_DE_NASCIMENTO', 'CPF') VALUES ('$npw', '$nname', '$nsn', '$nemail', '$ntel', '$nend', '$ngenero', '$ndn', '$ncpf')";
	

	$cadastrou = mysqli_query($conecta, $cadastrar);

	mysqli_close($conecta);
    if($cadastrou){
        echo "Músico cadastrado com sucesso!";
    }
    else{
        echo "<script language='javascript' type='text/javascript'>alert('Login e/ou senha inválidos');window.location.href='cad-musico.php';</script>";
    die();
    }
	?>
<p><a href="login.php">Acessar</a></p>
</body>
</html>