<?php

include 'init.php';

$linha = $_GET['linha'];

$u = $_SESSION['user'];
$data = file($u.'.csv');
$nome = trim($data[$linha]);
$dados = explode(',', $nome);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php include 'cabecalho.php' ?><br><br>
<h1>Editar</h1>
<form action="update_cad.php" method="POST">
<table id="aslap">
	<tr>
		<td>Nome: </td>
		<td><input type="text" name="novo_nome" value="<?= $dados[0] ?>" required></td>
	</tr>
	<tr>
		<td>Gênero: </td>
		<td><input type="text" name="novo_genero" value="<?= $dados[1] ?>" required></td>
	</tr>
	<tr>
		<td>
			<input type="hidden" name="linha" value="<?= $linha ?>">
		</td>
	</tr>
</table>
<input id="env" type="submit" value="Salvar">
</form>
</form>
</body>
</html>