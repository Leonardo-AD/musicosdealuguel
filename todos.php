<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gêneros</title>
	<link rel="shortcut icon" href="img/logoo.png">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<?php include 'cabecalho.php'; ?>

</head>
<body>

	<?php 

		$a=file('todos.txt');
		$str ="";
		foreach ($a as $key => $value) {
			$str .= $a[$key];
		}
		// $c=implode('', $a);
		$b=explode(PHP_EOL, $str);
	?>		
		
<div id="lista">
	<h1>Gêneros Cadastrados</h1>
	
		<?php for($i = 0; $i < sizeof($b); $i++): ?>
<li><?= $b[$i] ?>
<?php endfor; ?>

</div>		
</body>
</html>