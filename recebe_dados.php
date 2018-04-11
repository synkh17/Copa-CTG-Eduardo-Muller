
<?php
ini_set('default_charset', 'UTF-8');
if (isset($_POST['tmpString']))
    $tmpString = $_POST['tmpString'];
else
    $tmpString = null;

//echo 'o valor de tmpString é: '.$tmpString;




?>



<?php
include("conexao.php"); 
$consulta = "SELECT nome,
   idade, 
   matricula, 
   cerveja,
   refriagua, 
   (SELECT sum(cerveja) 
    FROM funcionario as t2 
    WHERE t.cerveja >= t2.cerveja 
      AND t.nome = t2.nome) as Acumulado 
FROM funcionario as t 
WHERE matricula = '" . $tmpString . "'
ORDER BY ACUMULADO DESC";


$con = $mysqli->query($consulta) or die ($mysqli->error);


?>

<html>


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">




    <title>Dados</title>



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
  <div class="jumbotron">
  <h1>Dados sobre suas fichas acumuladas:</h1> 
  <h4>Informamos aqui o valor total das suas fichas utilizadas.</h4>
  <h5>Clique <a href="index.html" target="_self">aqui</a> e volte para a página inicial.</h5> 
</div>
<div class="container">
  <h3>INFORMAÇÕES / ACUMULADO EM CERVEJA:</h3> 
</div>


<table class="table table-bordered table-striped table-condensed ">

		<td><b>Nome</b></td>
		<td><b>Idade</b></td>
		<td><b>Matricula</b></td>
		<td><b>Cerveja</b></td>
		<td><b>Refri/Água</b></td>
		<td><b>Valor a ser pago em fichas de Cerveja</b></td>
	</tr>


	<?php while($dado = $con->fetch_array()){?>


		<tr>
		<td> <?php echo $dado["nome"]; ?> </td>
		<td> <?php echo $dado["idade"]; ?> </td>
		<td> <?php echo $dado["matricula"]; ?> </td>
		<td> <?php echo $dado["cerveja"]; ?> </td>
		<td> <?php echo $dado["refriagua"]; ?> </td>
		<td> <?php echo $dado["Acumulado"]*0.75 *9;?> </td>

	</tr>

	<?php } ?>


				




</body>

</html>





<?php
ini_set('default_charset', 'UTF-8');
if (isset($_POST['tmpString']))
    $tmpString = $_POST['tmpString'];
else
    $tmpString = null;

//echo 'o valor de tmpString é: '.$tmpString;




?>

<?php
include("conexao.php"); 
$consulta2 = "SELECT nome,
   idade, 
   matricula, 
   cerveja,
   refriagua, 
   (SELECT sum(refriagua) 
    FROM funcionario as t3 
    WHERE t.refriagua >= t3.refriagua 
      AND t.nome = t3.nome) as Acumulado2
FROM funcionario as t
WHERE matricula = '" .$tmpString . "'
ORDER BY ACUMULADO2 DESC";


$con2 = $mysqli->query($consulta2) or die ($mysqli->error);


?>

<html>


<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">




    <title>Dados</title>



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


<table class="table table-bordered table-striped table-condensed">

    <td><b>Nome</b></td>
    <td><b>Idade</b></td>
    <td><b>Matricula</b></td>
    <td><b>Cerveja</b></td>
    <td><b>Refri/Água</b></td>
    <td><b>Valor a ser pago em fichas de Refri/Água</b></td>
  </tr>


  <?php while($dados = $con2->fetch_array()){ ?>

    <tr>
    <td> <?php echo $dados["nome"]; ?> </td>
    <td> <?php echo $dados["idade"]; ?> </td>
    <td> <?php echo $dados["matricula"]; ?> </td>
    <td> <?php echo $dados["cerveja"]; ?> </td>
    <td> <?php echo $dados["refriagua"]; ?> </td>
    <td> <?php echo $dados["Acumulado2"]*0.75 *4; ?> </td>

  </tr>

  <?php } ?>

        


<div class="container">
  <h3>INFORMAÇÕES / ACUMULADO EM REFRI/AGUA:</h3> 
</div>

</body>

</html>



