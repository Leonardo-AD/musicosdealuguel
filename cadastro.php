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
<form action="cad.php" method="POST">
<div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>Cadastre-se</h1>
            <p>Usuário</p>
            <input type="text" name="novo_login" placeholder="login" required>
            <p>Senha</p>
            <input type="password" name="nova_senha" placeholder="Senha" required>
<input id="env" type="submit" value="Salvar">
</form>
</div>
</html>
</body>
<?php include 'rodape.php'; ?>
