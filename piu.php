<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="img/logoo.png">
	<title>Página do Usuário</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
<h2 id="logado">Digite algumas infomações</h2>
<form id="logado" action="add.php" method="POST">
	<input type="text" name="nome" placeholder="Digite seu nome"><br><br>
	<input type="text" name="genero_musical" placeholder="Digite seu gênero musical"><br><br>
	<input id="envi" type="submit" value="enviar">
</form><br>
<a id="sair" href="logout.php">Sair</a>
</body>
</html>