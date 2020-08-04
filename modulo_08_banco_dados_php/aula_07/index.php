<?php
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_08_aula_06','root','');

    //linha abaixo mostra os erros do pdo.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    //LEFT JOIN, mesmo que não encontre o cargo retorna o cliente.
    //RIGHT JOIN, espelho do left.
    $sql = $pdo->prepare("SELECT * FROM `clientes` LEFT JOIN cargos ON `clientes`.`cargo` = `cargos`.`id`");
    $sql->execute();
    $clientes = $sql->fetchAll();

    echo "<h1>ORDER BY</h1>";
    foreach($clientes as $key => $value){
        echo $value['nome'];
        echo ' | ';
        echo $value['nome_cargo'];
        echo "<hr>";

    }
?>