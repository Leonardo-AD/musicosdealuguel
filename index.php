 <!DOCTYPE html>
<html lang="en">
<head>

	<link rel="shortcut icon" href="img/logoo.png">

	<link rel="stylesheet" href="web-fonts-with-css/css/fontawesome-all.min.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/
	bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/
	font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/
	jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/
	bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/estilo1.css">
	<title>Músicos de Aluguel</title>
</head>
<body>

<?php 
include 'cabecalho.php';
session_start();

?>
<div id="home">
	<div class="landing-text">
	<div id="texto">
	<p align="center">
	    <h3 align="center">Bem vindo ao Músicos de Aluguel!</h3></br>
		
		Se você procura contratar um músico para se apresentar em seu comércio ou evento,</br> ou é um músico e quer ser contratado, você está no lugar certo.
	<table id="tbusca">
		<?php
			if ($_SESSION['flash']==true) {
		 		echo "<script>alert('login ou senha incorretos!');</script>";
		 		$_SESSION['flash']=false;
	 		} 
 		?>
	</table>
	</p>
	</div>
</div>
</div>
<div id="home2">
	<div class="landing-text">
		
	</div>
</div>
<div id="home3">
	<div class="landing-text">
		<div id="texto">
			<h3 align="center">Todos os rítmos em um só lugar.</h3></br>
			
			<p id="p1">
				
				Juntando inovação, confiabilidade e simplicidade, o Músicos de Aluguel</br> promete ser a melhor experiência em contratação de músicos.

			</p>
		
		</div>
	</div>
</div>
<div id="home4">
	<div class="landing-text">
		
	</div>
</div>
<?php include 'rodape.php'; ?>
</body>
</html>

