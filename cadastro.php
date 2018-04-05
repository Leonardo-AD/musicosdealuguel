<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastre-se</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="shortcut icon" href="img/logo2.png">
</head>
<body>
<?php include "cabecalho.php"; ?>
<h1 id="hh" align="center">Cadastre-se</h1>
<form>	
<table id="aslap">
	<tr>
		<td>Nome: </td>
		<td><input type="text" name="nome" placeholder="Nome"></td>
	</tr>

	<tr>
		<td>E-mail: </td>
		<td><input type="text" name="E-MAIL" placeholder="Email"></td>
	</tr>

	<tr>
		<td>Senha: </td>
		<td><input type="text" name="senha" placeholder="Senha"></td>
	</tr>

</table>
<input id="env" type="submit" value="Enviar">
</form>	
</body>
</html>
