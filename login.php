
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<?php include "cabecalho.php" ?>
<div id="qs">
<h1 id="login">Login</h1>
<form id="login" action="do_login.php" method="POST">
	Login: <input type="text" name="usuário" placeholder="Nome" required title="Nome"><br>	
	Senha: <input type="passworld" name="senha" placeholder="Senha" required title="senha"><br>
	<input type="submit" name="Enviar">
</form>
</div>
</body>
</html>
