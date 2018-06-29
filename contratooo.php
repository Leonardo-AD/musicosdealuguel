<!DOCTYPE html>
<html>
<head>
	<title>
	</title>
</head>
<body>
<center>
<div>
<h1>Contrato</h1>
<?php

$id = $_POST['ident'];


?>
<form method="post" action="contract.php">
	<input type="hidden" name="id_m" value="<?= $id ?>"><br><br>
	<input type="hidden" name="id_c" value="1"><br><br>
	<input type="text" name="nome_m" placeholder="Nome Musico"><br><br>
	<input type="text" name="nome_c" placeholder="Nome do contratante"><br><br>
	<input type="text" name="local" placeholder="Local"><br><br>
	<input type="text" name="horario" placeholder="Horario"><br><br>
	<input type="text" name="dia" placeholder="Dia"><br><br>
	<input type="text" name="mes" placeholder="Mes"><br><br>
	<input type="text" name="ano" placeholder="Ano"><br><br>
	<input type="submit" value="contratar"><br><br>
</form>
</div>
</center>
</body>
</html>