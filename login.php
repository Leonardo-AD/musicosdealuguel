<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="shortcut icon" href="img/logo2.png">
</head>
<body>
<?php include "cabecalho.php" ?>
<h1 id="login">Login</h1>
<form id="login">
	<table>
		<tr>
		<td>Login: </td>
		<td><input type="text" name="login" placeholder="Login"></td>
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
