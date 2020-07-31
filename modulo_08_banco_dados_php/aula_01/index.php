<?php

    //pdo é o construtor que conecta e manipula o banco de dados

    //parametro 1 - onde está trabalhando
    //parametro 1 - nome da database utilizada
    //parametro 2 - login do php my admin
    //parametro 3 - senha de acesso ao banco de dados

    $pdo = new PDO('mysql:host=localhost;dbname=modulo_08','root', '');
?>
