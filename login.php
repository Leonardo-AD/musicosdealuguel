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
    <?php
    // session_start();
    if($_SESSION['logado']){
        header('location: piu.php');
    }
    ?>

<h1 id="login">Login</h1>
<form id="login" action="auth.php" method="POST">
	<table>
		<tr>
		<td>Login: </td>
		<td><input type="text" name="login" placeholder="Digite Seu Login" required></td>
		</tr>
		<tr>
		<td>Senha: </td>
		<td><input type="password" name="senha" placeholder="Digite Sua Senha" required></td>
		</tr>
	</table>
	<input type="submit" name="entrar">
<a href="cadastro.php">Cadastra-se</a>
</form>

<?php include 'rodape.php'; ?>
</body>
</html>