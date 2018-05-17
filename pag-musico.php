<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cadastro De Músicos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<main>
  <div class="container">
   
    <form action="cad-musico.php" method="post">
      <div class="form-row">
        <div class="form-group col-md-12">
          <h1>Cadastro de Músicos</h1>
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

      
        <div class="form-group col-md-6">
          <label for="senha">Senha:</label>
          <input type="password" class="form-control" id="senha" placeholder="Defina sua senha" name="senha" required>
        </div>

        <div class="form-group col-md-4">
          <label for="cpf">CPF:</label>
          <input type="text" class="form-control" id="cpf" placeholder="CPF" name="cpf" required>
        </div>
        
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="telefone">Telefone:</label>
            <input type="text" class="form-control" id="telefone" placeholder="Telefone" name="telefone" required>
          </div>
        </div>

        <div class="form-group col-md-2">
          <label for="gênero">Gênero Musical:</label>
          <input type="text" class="form-control" id="Gênero" placeholder="Gênero Musical" name="genero" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-5">
          <label for="data">Data de Nascimento:</label>
          <input type="text" class="form-control" id="data" placeholder="Data de Nascimento" name="data" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="endereco">Endereço:</label>
          <input type="text" class="form-control" id="endereco" placeholder="Endereço" name="endereco" required>
        </div>
      </div>
      
    
      
      <div class="form-row">
        <div class="form-group col-md-2">
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
      </div>
    </form>
  </div>

</main>
<br><br>
 </body>
</html>
<?php include "cabecalho.php"; ?>




















</body>
</html>
