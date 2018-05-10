<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="img/logoo.png">
	<title>Página do Usuário</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
				<form id="busc" action="piu.php" method="GET">
					<input type="text" name="user" placeholder="Busque um cantor"></td>
					<input type="submit"></td>
				</form>
			<!-- <a class="navbar-brand" href="#">Músicos de Aluguel</a> -->
		</div>
		<div class="collapse navbar-collapse" id="navbar-collapse-main">
			<div id="posicao">
			<ul class="nav navbar-nav navbar-rigth">
				<li><a href="../index.php" class="fa fa-home" aria-hidden="true">Home</a></li>
				<li class="dropdown">
				<a href="javascript:void(0)" class="fa fa-music" aria-hidden="true" class="dropbtn">Gêneros Musicais</a>
				<div class="dropdown-content">
					<a href="#" style="color: black;">Alternativo</a>
					<a href="#" style="color: black;">Hip Hop / Rap</a>
					<a href="#" style="color: black;">MPB</a>	
					<a href="#" style="color: black;">Pop</a>
					<a href="#" style="color: black;">Pop Rock</a>
					<a href="#" style="color: black;">Rock</a>
					<a href="#" style="color: black;">Sertanejo</a>	
					<a href="todos.txt" style="color: black;">Todos</a>				
				</div>
				</li>
				<!-- <li><a href="cadastro.php" class="fa fa-address-card" aria-hidden="true">Cadastre-se</a></li> -->
				<li><a href="quemsomos.php" class ="fa fa-users">Quem Somos</a></li>
				<li><a href="#myModalc" class="fa fa-sign-in" data-toggle="modal">Cadastre-se</a></li>
				<li><a href="logout.php" class="fa fa-sign-in">Sair</a></li>
			</ul>
		</div>
		</div>
	</div>
</nav>
	<?php
		include 'init.php';
		if(empty($_GET['user'])){
			if($_SESSION['user']){
				$u = $_SESSION['user'];
			}
			else{
				redirect('index.php');
			}
		}
		else{
			
				$u = $_GET['user'];
			}
			
			
		$filename = "$u.csv";
		$data = file($filename);
		$arr =[];
		for($i = 0; $i < sizeof($data); $i++ ) {
    $data[$i] = explode(',', $data[$i]);
    $arr[$i] = $data[$i];
		}
	?>
<br>
<div id="primeiro">

	<h3>
	




<?php for($i = 0; $i < sizeof($data); $i++): ?>
<?= $data[0][$i] ?><br>
Gênero Musical: <?= $data[0][1] ?><br>

<a href='update.php?linha=<?=$i?>' style="margin-right:-425px;float: right;margin-top: -110px; "><i class="far fa-edit" ></i></a>

<?php endfor; ?>
	</h3>
	<div id="i">
		<img src="img/zuck.jpg">
	</div>
</div>

<div id="segundo">

</div>

<div id="terceiro">

</div>

<div id="quarto">

</div>

<div id="quinto">

</div><br><br>
<?php include 'rodape.php'; ?>

</body>
</html>