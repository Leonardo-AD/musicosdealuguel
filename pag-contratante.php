<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cadastro De Contratantes</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
		 <?php include "cabecalho.php"; ?>
</head>
<body>
<main>
	<div class="container">
   
    <form action="cad-contratante.php" method="post">
      <div class="form-row">
        <div class="form-group col-md-12">
          <h2>Cadastro de Contratantes</h2>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" id="nome" placeholder="Nome do Contratante" name="nome" required>
        </div>

        <div class="form-group col-md-4">
          <label for="sobrenome">sobrenome:</label>
          <input type="text" class="form-control" id="sobrenome" placeholder="seu sobrenome" name="" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="email">Email:</label>
          <input type="text" class="form-control" id="email" placeholder="seu email" name="email" required>
        </div>

        <div class="form-group col-md-6">
          <label for="cnpj">CNPJ:</label>
          <input type="text" class="form-control" id="cnpj" placeholder="Numero de registro" name="cnpj" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="senha">Senha:</label>
          <input type="text" class="form-control" id="senha" placeholder="Sua senha" name="senha" required>
        </div>

        <div class="form-group col-md-4">
          <label for="cpf">CPF:</label>
          <input type="text" class="form-control" id="cpf" placeholder="CPF" name="cpf" required>
        </div>

        <div class="form-group col-md-2">
          <label for="bairro">Bairro:</label>
          <input type="text" class="form-control" id="bairro" placeholder="Bairro" name="bairro" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-5">
          <label for="nomeRes">Cidade:</label>
          <input type="text" class="form-control" id="cidade" placeholder="cidade" name="cidade" required>
        </div>
      </div>

      
    
      
      <div class="form-row">
        <div class="form-group col-md-2">
	<br><button type="submit" class="btn btn-primary">Cadastrar</button></br>

        </div>
      </div>
    </form>
  </div>

</main>
</body>
</html>
