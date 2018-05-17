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
          <input type="text" class="form-control" id="nome" placeholder="Nome do Músico" name="nome" required>
        </div>

        <div class="form-group col-md-4">
          <label for="sobrenome">sobrenome:</label>
          <input type="text" class="form-control" id="sobrenome" placeholder="seu sobrenome" name="sobrenome" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="email">Email:</label>
          <input type="text" class="form-control" id="email" placeholder="seu email" name="email" required>
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
          <label for="gênero">Gênero Musical:</label>
          <input type="text" class="form-control" id="Gênero" placeholder="gênero" name="genero" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-5">
          <label for="data">Data de Nascimento:</label>
          <input type="text" class="form-control" id="data" placeholder="data" name="data" required>
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
