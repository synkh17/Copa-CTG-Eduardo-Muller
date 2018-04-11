<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">




    <title>Copa - CTG Eduardo Muller</title>



    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/coming-soon.min.css" rel="stylesheet">

  </head>

  <body>

    <div class="overlay"></div>

    <div class="masthead">
      <div class="masthead-bg"></div>
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-12 my-auto">
            <div class="masthead-content text-white py-5 py-md-0">
            
              <h1>CTG Eduardo Muller</h1>
              <br/><br/><br/><br/>
             
  
<?php

ini_set('default_charset', 'UTF-8');

    //Criacação de uma instância de objeto,
    //passando como par a string de conexão, o usuário e a senha
    try{
      $con = new PDO("mysql:host=localhost;dbname=cadastro1", 'root', '');
    }catch(PDOExcepetion $e){
      echo 'Falha na COnexão: ' . $e->getMessage();
    }
    $con->query(
      "SET NAMES utf8");


    $pessoa = $_POST;
    $sql = "INSERT INTO funcionario(nome, idade, matricula, cerveja, refriagua) "
          ." VALUES(:nome, :idade, :matricula, :cerveja, :refriagua)";
    $query = $con->prepare($sql);
    if($query->execute($pessoa)) echo "<h3>Seus dados foram cadastrados com sucesso</h3>";
    else echo "Erro ao cadastrar";

?>

<br/>
<h5>Clique <a href="index.html" target="_self">aqui</a> para retornar para a página inicial!</h5>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="social-icons">
      <ul class="list-unstyled text-center mb-0">
        <li class="list-unstyled-item">
          <a href="https://www.facebook.com/ctgedumuller" target="_blank">
            <i class="fa fa-facebook"></i>
          </a>
        </li>
      </ul>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="vendor/vide/jquery.vide.min.js"></script>
    <!-- Custom scripts for this template -->
    <script src="js/coming-soon.min.js"></script>
  </body>
</html>
