<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet"  href="https://maxcdn.bootstrapcdn.com/
	bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/
	font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet"  href="font-awesome-4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/
	jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/
	bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/estilo1.css">
	<title>Músicos de Aluguel</title>

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
				<li><a href="#myModal" class="fa fa-sign-in" data-toggle="modal">Login</a></li>
			</ul>
		</div>
		</div>
	</div>
</nav>

<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">			
				<h4 class="modal-title">Login</h4>	
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="auth.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="login" placeholder="E-mail" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="senha" placeholder="Senha" required="required">	
					</div>        
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn">Entrar</button>
							<!-- <a href="#myModalc" style="margin-left: 400px;">Cadastre-se</a> -->

					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<div id="myModalc" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">			
			<!-- 	<h4 class="modal-title">Selecione o Perfil</h4>	 -->
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				        
					<div class="form-group">
						<h4 class="modal-title">Cadastrar-se como:</h4>
							
						<a href= "pag-musico.php" type="submit" class="btn btn-primary btn-lg btn-block login-btn" style="margin-top: 8%;margin-left:60%; margin-top:10%;">Músico</a>
					
						<a href="pag-contratante.php"
						type="submit" class="btn btn-primary btn-lg btn-block login-btn" style="margin-top:-8%;margin-right:-100%;margin-left:10%;">Contratante</a>

				</div>
				</form>
			</div>
		</div>
	</div>
</div>
