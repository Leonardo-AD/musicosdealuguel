<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="img/logoo.png">
	<title>Página do Usuário</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<?php 
		$u = $_GET['user'];
		$filename = "$u.csv";
		$data = file($filename);
		$arr =[];
		for($i = 0; $i < sizeof($data); $i++ ) {
    $data[$i] = explode(',', $data[$i]);
    $arr[$i] = $data[$i];
		}
	?>
	
<div id="primeiro">

	<h3>
		<?php for($i = 0; $i < sizeof($data); $i++): ?>
<?= $data[0][$i]."<br/></br></br>"."Gênero Musical: ".$data[0][1] ?> 
<?php endfor; ?>
	</h3>
	<div id="i">
		<img src="img1.jpg">
	</div>
</div>

<div id="segundo">

</div>

<div id="terceiro">
	
</div>

<div id="quarto">
	
</div>

<div id="quinto">
	
</div>

<a id="sair" href="logout.php">Sair</a>
</body>
</html>