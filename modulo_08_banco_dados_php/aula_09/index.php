<?php

    $pdo = new PDO('mysql:host=localhost;dbname=modulo_08b','root','');


    //LOCK TABLES, bloqueia a tabela.
    $sql = $pdo->exec("LOCK TABLES `posts` WRITE");
    sleep(10);

    $pdo->exec("UNLOCK TABLES");

?>