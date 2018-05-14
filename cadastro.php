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

				Login
                <input type="text" name="new_user" placeholder="Login"
                required >
				Senha
                <input type="password" name="new_pw" placeholder="Senha"
                required>

                <button type="submit">Cadastrar</button>
            </form>

<?php include 'rodape.php'; ?>
</body>
</html>
