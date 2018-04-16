<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastre-se</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="shortcut icon" href="img/logoo.png">
</head>
<body>
<?php include "cabecalho.php"; ?>
<h1 id="hh" align="center">Cadastre-se</h1>
<form action="cad.php" method="POST">	
<table id="aslap">

	<tr>
		<td>E-mail: </td>
		<td><input type="email" name="novo_email" placeholder="E-mail" required></td>
	</tr>

	<tr>
		<td>Senha: </td>
		<td><input type="password" name="nova_senha" placeholder="Senha" required></td>
	</tr>

</table>
<input id="env" type="submit" value="Salvar">
</form>	
</body>
</html>
