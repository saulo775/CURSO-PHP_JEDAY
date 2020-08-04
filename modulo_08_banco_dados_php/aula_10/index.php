<?php

    $pdo = new PDO('mysql:host=localhost;dbname=modulo_08c','root','');


    //LIKE, serve para realizar pesquisas.
    $sql = $pdo->prepare("SELECT * FROM `pessoas` WHERE email LIKE '%g%'");

    $sql->execute();

    $emails = $sql->fetchAll();


    print_r($emails);

?>