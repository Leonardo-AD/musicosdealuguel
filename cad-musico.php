<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro</title>
</head>
<body>
	<?php

	include 'init.php';

	$nw = $_POST['new_user'];
	$npw = $_POST['new_pw'];
	$nw
	$npw
	$nname
	$nsn
	$nem
	$gm
	$dn
	$ncpf
	
	$cadastrar = "INSERT INTO `MUSICO` (`USUARIO`, `SENHA`, 'NOME', 'SOBRENOME', 'EMAIL', 'GENERO_MUSICAL', 'DATA_DE_NASCIMENTO', 'CPF') VALUES ('$nw', '$npw', '$nname', '$nsn', '$nem', '$gm', '$dn', '$ncpf')";
	$cadastrou = mysqli_query($conecta, $cadastrar);

	mysqli_close($conecta);

    if($cadastrou){
        echo "Músico cadastrado com sucesso!";
    }
    else{
        echo "<script language='javascript' type='text/javascript'>alert('Login e/ou senha inválidos');window.location.href='cadastro.php';</script>";
    die();
    }
	?>
<p><a href="login.php">Acessar</a></p>
</body>
</html>