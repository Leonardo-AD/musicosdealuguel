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
<div id="qs">
	<h1 id="aslap">Cadastre-se</h1>
	<form action="" method="POST" id="aslap">		
	Nome: <input type="text" name="Nome" placeholder="Nome" required title="Nome"><br>	
	CPF: <input type="text" name="Cpf" placeholder="CPF" required title="CPF"><br>
	Endereço: <input type="text" name="Endereco" placeholder="Endereço" required title="Endereço"><br>
	Telefone: <input type="text" name="Telefone" placeholder="Telefone" required title="Telefone"><br>
	E-mail: <input type="text" name="Email" placeholder="E-mail" required title="E-mail"><br>
	<input type="submit" value="Cadastrar">
	</form>
</div>			
</body>
</html>