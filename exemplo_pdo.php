<?php

    //Criacação de uma instância de objeto,
    //passando como par a string de conexão, o usuário e a senha
    $con = new PDO("mysql:host=localhost;dbname=cadastro1", 'root', '');

    $sql = "INSERT INTO pessoa(nome, idade, matricula)"
          . " VALUES('Pedro', 20, '89167');";
    //echo $sql;
    $result = $con->query($sql);
    if($result==true) echo "Inserido com Sucesso";
    else echo "Erro ao inserir";

    $pessoa = array('nome'=>"Victor",
                    'idade'=>31,
                    'matricula'=>3413);
    $pessoa2 = array('nome'=>"João",
                    'idade'=>34,
                    'matricula'=>3414);
    //segunda maneira de utilizar o INSERT
    $sql = "INSERT INTO pessoa(nome, idade, matricula) "
          ." VALUES(:nome, :idade, :matricula)";
    $query = $con->prepare($sql);
    echo ($query->execute($pessoa))? "Sucesso" : "ERRO!";
    echo ($query->execute($pessoa2))? "Sucesso" : "ERRO!";

?>
