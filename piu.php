<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="img/logoo.png">
	<title>Página do Usuário</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<?php 
		include 'cabecalho.php';
		include 'init.php';

		$user = $_SESSION['user'];

		$filename = "$user.csv";
		$id_user = $_GET['user'];

		if(!file_exists($filename)){
			touch($filename);
		}

		$data = file($filename);
		
	?>

<div id="primeiro">
	<div id="i">
		<img src="<?php ?>">
	</div>
</div>

<div id="segundo">
	<table border="1">
		<tr>
			<td></td>
		</tr>
	</table>
</div>

<div id="terceiro">
	
</div>

<div id="quarto">
	
</div>

<div id="quinto">
	
</div>

<h2 id="logado">Digite algumas informações</h2>
<form id="logado" action="add.php" method="POST">
	<input type="text" name="nome" placeholder="Digite seu nome"><br><br>
	<input type="text" name="genero_musical" placeholder="Digite seu gênero musical"><br><br>
	<input id="envi" type="submit" value="Enviar">
</form>
<a id="sair" href="logout.php">Sair</a>
</body>
</html>