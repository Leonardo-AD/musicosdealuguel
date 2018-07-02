<!DOCTYPE html>
<html>
<title>Página do Usuário</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}
</style>
<body class="w3-light-grey">
    <div style="margin-top:5%;">
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
    <?php include "cabecalho-log.php"; ?>  
    <?php
    
        include 'init.php';
    if(isset($_SESSION['user'])){
        $user = $_SESSION['user'];
        $conectou = mysqli_query($conecta, "SELECT * FROM MUSICO WHERE EMAIL = '$user'") or die("erro ao selecionar");

    while($linha = mysqli_fetch_array($conectou)){
            $id = $linha['ID'];
            $senha = $linha['SENHA'];
            $nome = $linha['NOME'];
            $sobrenome = $linha['SOBRENOME'];
            $email = $linha['EMAIL'];
            $telefone = $linha['TELEFONE'];
            $endereco = $linha['ENDERECO'];
            $genero = $linha['GENERO_MUSICAL'];
            $data = $linha['DATA_DE_NASCIMENTO'];
            $cpf = $linha['CPF'];
            $foto = $linha['FOTO'];
            $_SESSION['id'] = $id;
            $descricao=$linha['DESCRICAO'];

    }
    //$id = mysqli_query($conecta, "SELECT ID FROM MUSICO WHERE NOME = '$user");
   
    
  ?>
  
  <?php
  

    
    $conectou = mysqli_query($conecta,"SELECT * FROM FOTOS WHERE ID_MUSICO = $id");
    while($foto = mysqli_fetch_array($conectou)){
        $fotos = $foto['FOTO'];
    }
  
  ?>
  
<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;margin-top:200%;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container" >
            
             <form method="post" action="upload_img.php" enctype="multipart/form-data">
                <input type="file" name="arquivo" style="color:white;">
                <input type="hidden" name="id" value='<?php echo $id ?>'>
                <input type="submit" value="Atualizar">
                <!--<a  target='_blank' data-placement="top" title="Editar Foto"><i class="fa fa-edit fa-1x"></i></a>-->
            </form>
          
          <img src="foto/<?php echo $fotos ?>"style="width:100%;height: 400px;" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2><?= $nome ?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $genero ?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $endereco ?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $email ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?= $telefone ?></p>
          <p><i class="fa fa-calendar fa-fw w3-margin-right w3-text-teal"></i><?= $data[0].$data[1]." / ".$data[2].$data[3]." / ".$data[4].$data[5].$data[6].$data[7] ?></p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Resumo</b></p>
          <p>Apresentações</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
          </div>
          <p>Avaliações</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
              <div class="w3-center w3-text-white">80%</div>
            </div>
          </div>
          <p>Seguidores</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
          </div>
          <p>Media</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
          </div>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Experiência Instrumental</b></p>
          <p>Violão</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Bateria</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
          </div>
          <p>Guitarra</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Detalhes Musicais</h2>
    
        <!--<div class="container">    -->
        <!--    <form method="post">-->
        <!--        <div class="form-group">-->
        <!--            <label for="comment">Descrição:</label>-->
        <!--            <textarea class="form-control" rows="5" id="comment" style="width: 50%;"></textarea>-->
        <!--        </div>-->
                <!--<a href="#" data-placement="top" title="Enviar"><i class="fa fa-check-circle fa-1x"></i></a>-->
                
                <!--<a href="#" data-placement="top" title="Editar"><i class="fa fa-edit fa-1x"></i></a>-->
        <!--    </form>-->
        <!--</div>-->
        
        
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Descrição</b></h5> <a href="#" data-placement="top" title="Enviar"><i class="fa fa-check-circle fa-1x"></i></a> 
          <a href="#" data-placement="top" title="Editar"><i class="fa fa-edit fa-1x"></i></a>
          <!--<h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2015 - <span class="w3-tag w3-teal w3-round">Current</span></h6>-->
          <p><?=$descricao?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Em definição</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Mar 2012 - Dec 2014</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Em definição</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2010 - Mar 2012</h6>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p><br>
        </div>
      </div>

     <!--  <div class="w3-container w3-card w3-white">
       <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
       <div class="w3-container">
         <h5 class="w3-opacity"><b>W3Schools.com</b></h5>
         <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
         <p>Web Development! All I need to know in one place</p>
         <hr>
       </div>
       <div class="w3-container">
         <h5 class="w3-opacity"><b>London Business School</b></h5>
         <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
         <p>Master Degree</p>
         <hr>
       </div>
       <div class="w3-container">
         <h5 class="w3-opacity"><b>School of Coding</b></h5>
         <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
         <p>Bachelor Degree</p><br>
       </div>
     </div> -->

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
  <?php 
    }
    else{
        echo "<script language='javascript' type='text/javascript'>alert('Você precisa estar logado para acessar essa página!');window.location.href='index.php';</script>";
    }
    ?>
</div>

<?php 
    include 'rodape-log.php';
  ?>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script type="text/javascript" src="js/fliplightbox.min.js"></script>
  <script src="js/functions.js"></script>
  <script type="text/javascript">
    $('.portfolio').flipLightBox()
  </script>

</body>
</html>