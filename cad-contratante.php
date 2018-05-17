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
	$npw = $_POST['senha'];
	$nname = $_POST['nome'];
	$nsn = $_POST['sobrenome'];
	$nend = $_POST['endereco'];
	$ncnpj = $_POST['cnpj'];
	$ntel = $_POST['telefone'];
	
	$cadastrar = "INSERT INTO `CONTRATANTE` ('EMAIL', 'SENHA', `NOME`, 'SOBRENOME', 'ENDERECO, 'CNPJ', 'TELEFONE') VALUES ('$nen', '$npw', '$nname', '$nsn', '$nend', '$ncnpj', '$ntel')";
	$cadastrou = mysqli_query($conecta, $cadastrar);

	mysqli_close($conecta);

    if($cadastrou){
        echo "Contratante cadastrado com sucesso!";
    }
    else{
        echo "<script language='javascript' type='text/javascript'>alert('Login e/ou senha inválidos');window.location.href='cad-contratante.php';</script>";
    die();
    }
	?>
<p><a href="login.php">Acessar</a></p>
</body>
</html>