
<?php
ini_set('default_charset', 'UTF-8');
include("conexao.php"); 
$consulta = "SELECT
   nome, 
   idade, 
   matricula, 
   cerveja,
   refriagua, 
   (SELECT sum(cerveja) 
    FROM funcionario as t2 
    WHERE t.cerveja >= t2.cerveja 
      AND t.nome = t2.nome) as Acumulado 
FROM funcionario as t ORDER BY t.nome, t.cerveja";


;
$con = $mysqli->query($consulta) or die ($mysqli->error);


?>


<html>


<head>
</head>

<body>


<table>
	<tr>
		<td>Nome</td>
		<td>Idade</td>
		<td>Matricula</td>
		<td>Cerveja</td>
		<td>Refri/Água</td>
		<td>Acumulado</td>
	</tr>


	<?php while($dado = $con->fetch_array()){ ?>

		<tr>
		<td> <?php echo $dado["nome"]; ?> </td>
		<td> <?php echo $dado["idade"]; ?> </td>
		<td> <?php echo $dado["matricula"]; ?> </td>
		<td> <?php echo $dado["cerveja"]; ?> </td>
		<td> <?php echo $dado["refriagua"]; ?> </td>
		<td> <?php echo $dado["Acumulado"]; ?> </td>

	</tr>

	<?php } ?>


				




</body>

</html>