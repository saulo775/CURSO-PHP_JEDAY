<?php

    $pdo = new PDO('mysql:host=localhost;dbname=modulo_08c','root','');


    //IN, serve para selecionar os, nesse caso, ids selecionados.
    $sql = $pdo->prepare("SELECT * FROM `pessoas` WHERE id IN (1,2,3)");
    //BETWEEN, pega qualquer coisa entre duas condiçoes, (muito utilizado com datas).
    $sql = $pdo->prepare("SELECT * FROM `pessoas` WHERE datas BETWEEN '2017-01-01' AND '2017-12-01'");

    $sql->execute();

    $emails = $sql->fetchAll();


    print_r($emails);

?>