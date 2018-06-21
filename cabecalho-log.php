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
              
            <li><a class= "git" target='_blank' href="index.php" data-placement="top" title="Início"><i class="fa fa-home fa-1x"></i></a></li>
               
            <li><a class= "git"  href="#" data-placement="top" title="Mensagens"><i class="fa fa-comments fa-1x"></i></a></li>
            
            <li><a class= "git"  href="#" data-placement="top" title="Notificações"><i class="fa fa-bell fa-1x"></i></a></li>
        
            <li><a class= "git" href="#" data-placement="top" title="Sair"><?=strtoupper($_SESSION['user-logged'])?><i class="fa fa-power-off fa-1x"></i></a></li>
       
          </ul>
        </div>
      </div>
    </div>
  </nav>
</body>
  