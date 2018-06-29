<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Músicos de Aluguel</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/set1.css" />
  <link href="css/overwrite.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/
  jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/
  bootstrap.min.js"></script>
  <link rel="shortcut icon" href="img/logoo.png">
 
</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
        <a class="navbar-brand" href="index.php"><span>Músicos de Aluguel</span></a>
      </div>

      <div class="navbar-collapse collapse">
        <div class="menu">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="index.php">Home</a></li>
            
        <!--    <li class="dropdown">-->
        <!--<a href="javascript:void(0)" aria-hidden="true" class="dropbtn">Gêneros Musicais</a>-->
        <!--<div class="dropdown-content" style="margin-left: 12px;">-->
        <!--  <a href="#">Eletrônica</a>-->
        <!--  <a href="#">Hip Hop</a>-->
        <!--  <a href="#">MPB</a> -->
        <!--  <a href="#">Pop</a>-->
        <!--  <a href="#">Pop Rock</a>-->
        <!--  <a href="#">Rap</a>-->
        <!--  <a href="#">Reggae</a>-->
        <!--  <a href="#">Rock</a>-->
        <!--  <a href="#">Sertanejo</a> -->
        <!--  <a href="todos.php">Todos</a>       -->
        <!--</div>-->
        <!--</li>-->
        
        <div class="navbar-collapse collapse">
        <div class="menu">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="lstc.php">Contratações</a></li>

            <!--<li role="presentation"><a href="#myModalc" data-toggle="modal">Cadastre-se</a></li>-->
            <li role="presentation"><a href="logout.php">Logout</li>
            <!--<li role="presentation"><a href="quemsomos.php">Quem Somos</a></li>-->
          </ul>
        </div>
      </div>
    </div>
  </nav>

<div id="myModalc" class="modal fade">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <!-- <div class="modal-header"> -->
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color: red;">&times;</button>
                
          <div class="form-group">
            <h4 class="modal-title">Cadastrar-se como:</h4>

            <hr style="margin-top: 10px;">
              
            <a href= "pag-musico.php" type="submit" class="btn btn-primary btn-lg btn-block login-btn" style="margin-top:-25px;margin-left:70px;">Músico</a>
          
            <a href="pag-contratante.php" type="submit" class="btn btn-primary btn-lg btn-block login-btn" style="margin-top:-25px;margin-left:72px;">Contratante</a>

          </div>
      </div>
    </div>
  </div>
</div>

<div id="myModal" class="modal fade">
  <div class="modal-dialog modal-login">
    <div class="modal-content" style="height: 250px;">
      <div class="modal-header">      
        <h4 class="modal-title" style="margin-top:13px;">Login</h4>  
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="color:red; margin-top: -45px; margin-right:1px;">&times;</button>
      </div>
      <div class="modal-body">
        <form action="auth.php" method="POST">
          <div class="form-group">
            <input type="text" class="form-control" name="login" placeholder="E-mail" required="required" style="margin-top: 15px; margin-left:60px; width: 350px; border-radius:20px;">    
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="senha" placeholder="Senha" required="required" style="margin-top: -10px; margin-left:60px; width: 350px; border-radius:20px;"> 
          </div>        
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block login-btn" style="margin-top: -10px; margin-left:185px; width: 350px; width: 100px; border-radius: 20px;">Entrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
  
  