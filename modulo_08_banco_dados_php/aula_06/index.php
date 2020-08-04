<?php
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_08_aula_06','root','');

    //linha abaixo mostra os erros do pdo.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //GROUP BY,  agrupa os items por um atributo em comum.
    //LIMIYT, limita quantos serao retornados.
    $sql = $pdo->prepare("SELECT * FROM `clientes` GROUP BY `cargo` LIMIT 2");
    $sql->execute();
    $clientes = $sql->fetchAll();

    echo "<h1>GROUP BY</h1>";
    foreach($clientes as $key => $value){
        echo $value['nome'];
        echo "<hr>";

    }

    //ORDER BY, ordena as linhas definido pelo atributo escolhido.
    //ASC, modo crescente de ordenação.
    //DESC, modo decrescente de ordenação.
    //"LIMIT 0,3", limita de onde quer começar e onde para.
    $sql = $pdo->prepare("SELECT * FROM `clientes` ORDER BY `nome` ASC LIMIT 0,3");
    $sql->execute();
    $clientes = $sql->fetchAll();

    echo "<h1>ORDER BY</h1>";
    foreach($clientes as $key => $value){
        echo $value['nome'];
        echo "<hr>";

    }

?>