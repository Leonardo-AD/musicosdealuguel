<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastre-se</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php include "cabecalho.php"; ?>
<h1 id="hh" align="center">Cadastre-se</h1>
<form>	
<table id="aslap">
	<tr>
		<td><label>NOME : </label></td>
		<td><input type="text" name="nome" placeholder="Nome"></td>
	</tr>
	<tr>
		<td><label>E-MAIL : </label></td>
		<td><input type="text" name="E-MAIL" placeholder="Email"></td>
	</tr>
	<tr>
		<td><label>SENHA : </label></td>
		<td><input type="text" name="senha" placeholder="Senha"></td>
	</tr>
	<tr>
		<td><label>CPF : </label></td>
		<td><input type="text" name="cpf" placeholder="CPF"></td>
	</tr>
	<tr>
		<td><label>TELEFONE : </label></td>
		<td><input type="text" name="tel" placeholder="Telefone"></td>
	</tr>
</table>
<input id="env" type="submit" name="enviar">
</form>	
</body>
</html>
