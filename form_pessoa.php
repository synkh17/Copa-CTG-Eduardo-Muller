<!DOCTYPE html>
<html lang="en">
<head>
  <title>Formulário de Cálculo de Salário</title>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Cadastro de Pessoa</h2>
  <form action="cadPessoa.php" method="POST">
    <div class="form-group">
      <label for="nome">Nome:</label>
      <input type="text" class="form-control" id="nome" placeholder="Informe seu nome" name="nome" required>
    </div>
    <div class="form-group">
      <label for="idade">Idade</label>
      <input type="number" class="form-control" id="idade" placeholder="Informe sua Idade" name="idade" min='0' max='120' required>
    </div>
    <div class="form-group">
      <label for="matricula">Data Inclusão</label>
      <input type="text" class="form-control" id="matricula" placeholder="Informe sua data de inclusão na entidade" name="matricula" required>
    </div>
    <div class="form-group">
      <label for="matricula">Quantidade de fichas de cervejas:</label>
      <input type="text" class="form-control" id="matricula" placeholder="Informe suas fichas" name="cerveja" required>
    </div>
    <div class="form-group">
      <label for="matricula">Quantidade de fichas de água/refri:</label>
      <input type="text" class="form-control" id="matricula" placeholder="Informe suas fichas" name="refriagua" required>
    </div>

    <button type="submit" class="btn btn-default">Cadastrar</button>
  </form>
</div>

</body>
</html>
