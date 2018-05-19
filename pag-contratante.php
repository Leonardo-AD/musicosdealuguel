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
   
    <form action="cad-contratante.php" method="POST">
      <div class="form-row">
        <div class="form-group col-md-12">
          <h2>Cadastro de Contratantes</h2>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" id="nome" placeholder="Nome" name="nome" required>
        </div>

        <div class="form-group col-md-4">
          <label for="sobrenome">Sobrenome:</label>
          <input type="text" class="form-control" id="sobrenome" placeholder="Sobrenome" name="sobrenome" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="email">Email:</label>
          <input type="text" class="form-control" id="email" placeholder="E-mail" name="email" required>
        </div>

      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="telefone">Telefone::</label>
          <input type="text" class="form-control" id="telefone" placeholder="Telefone (Somente números)" name="telefone" required>
        </div>
      </div>

        <div class="form-group col-md-6">
          <label for="cnpj">CNPJ / CPF:</label>
          <input type="text" class="form-control" id="cnpj" placeholder="Informe o CNPJ ou CPF (Somente números)" name="cnpj" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="senha">Senha:</label>
          <input type="password" class="form-control" id="senha" placeholder="Defina sua senha" name="senha" required>
        </div>

        <div class="form-group col-md-2">
          <label for="bairro">Endereço:</label>
	          <input type="text" class="form-control" id="bairro" placeholder="Rua, Nº, Bairro e Cidade" name="endereco" required>
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
