<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="shortcut icon" href="img/logoo.png">
</head>
<body>
<?php include "cabecalho.php"; ?>
<h1 id="login"></h1>
<form id="login" action="auth.php" method="POST">
<div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>Login</h1>
            <p>Usuário</p>
            <input type="text" name="login" placeholder="Digite seu login" required>
            <p>Senha</p>
            <input type="password" name="senha" placeholder="Digite sua senha" required>
			<input id="env" type="submit" value="Entrar">
            <a href="#">Esqueçeu a senha?</a>    
            <a href="cadastro.php">Cadastre-se</a>
            </form>

 </div>
</html>
</body>
<?php include 'rodape.php'; ?>
