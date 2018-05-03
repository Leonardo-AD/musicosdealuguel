 <!DOCTYPE html>
<html lang="en">
<head>
	<!-- <style type="text/css">
	body {
		font-family: 'Varela Round', sans-serif;
	}
	.modal-login {		
		color: #636363;
		width: 350px;
	}
	.modal-login .modal-content {
		padding: 20px;
		border-radius: 5px;
		border: none;
	}
	.modal-login .modal-header {
		border-bottom: none;   
        position: relative;
        justify-content: center;
	}
	.modal-login h4 {
		text-align: center;
		font-size: 26px;
		margin: 5px 0 -15px;
	}
	.modal-login .form-control:focus {
		border-color: #70c5c0;
	}
	.modal-login .form-control, .modal-login .btn {
		min-height: 40px;
		border-radius: 3px; 
	}
	.modal-login .close {
    position: absolute;
		top: -5px;
		right: -5px;
	}	
	.modal-login .modal-footer {
		background: #ecf0f1;
		border-color: #dee4e7;
		text-align: center;
    justify-content: center;
		margin: 0 -20px -20px;
		border-radius: 5px;
		font-size: 13px;
	}
	.modal-login .modal-footer a {
		color: #999;
	}		
	.modal-login.modal-dialog {
		margin-top: 60px;
	}
    .modal-login .btn {
        color: #fff;
        border-radius: 20px;
				background: #23415c;
				text-decoration: none;
				transition: all 0.4s;
        line-height: normal;
        border: none;
        width: 100px;
    }
	.modal-login .btn{
		text-align: center;
		margin-left: 220px;
		outline: none;
	}
	.trigger-btn {
		display: inline-block;
		margin: 100px auto;
	}
	</style> -->

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

