<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro</title>
</head>
<body>
	<?php

	include 'init.php';

	$nname
	$nsn
	$nem
	$npw = $_POST['new_pw'];
	$ncpf
	
	$cadastrar = "INSERT INTO `CONTRATANTE` (`NOME`, 'SOBRENOME', 'EMAIL', 'SENHA', 'CPF') VALUES ('$nname', '$nsn', '$nem', '$npw', '$ncpf')";
	$cadastrou = mysqli_query($conecta, $cadastrar);

	mysqli_close($conecta);

    if($cadastrou){
        echo "Contratante cadastrado com sucesso!";
    }
    else{
        echo "<script language='javascript' type='text/javascript'>alert('Login e/ou senha inválidos');window.location.href='cadastro.php';</script>";
    die();
    }
	?>
<p><a href="login.php">Acessar</a></p>
</body>
</html>