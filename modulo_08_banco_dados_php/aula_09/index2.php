<?php

    $pdo = new PDO('mysql:host=localhost;dbname=modulo_08b','root','');

    $sql = $pdo->prepare("SELECT * FROM `posts`");
    $sql->execute();
    $usuarios = $sql->fetchAll();
    foreach ($usuarios as $key => $value) {
        echo $value['titulo'];
        echo '<hr>';
    }

?>