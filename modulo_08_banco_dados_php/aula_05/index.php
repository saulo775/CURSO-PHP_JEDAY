<?php

    $pdo = new PDO('mysql:host=localhost;dbname=modulo_08','root','');

    /*
    //SELECT * FROM,  pega todas as informações da tabela escolhida.
    $sql = $pdo->prepare("SELECT * FROM `posts` WHERE categoria_id = ?");

    $sql->execute(array($_GET['categoria_id']));

    //FETCHALL, pega todas as informaçoes do DB.
    $info = $sql->fetchAll();

    // echo '<pre>';
    // print_r($info);
    // echo '</pre>';



    //FOREACH, É uma espécie de for
    foreach ($info as $key => $value) {
        echo 'Titulo:'.$value['titulo'];
        echo "<br>";
        echo 'Noticia'.$value['conteudo'];
        echo "<hr>";
    }
    */

    $sql = $pdo->prepare("SELECT * FROM `categorias`");

    $sql->execute(array($_GET['categoria_id']));

    $info = $sql->fetchAll();

    /*
    //FOREACH, É uma espécie de for
    foreach ($info as $key => $value) {
        $categoria_id = $value['id'];
        echo 'Exibindo posts de:'.$value['nome'];
        echo "<br/>";
        $sql = $pdo->prepare("SELECT FROM `posts` WHERE categoria_id = $categoria_id");
        $sql->execute();
        $infoPosts = $sql->fetchAll();
        foreach ($infoPosts as $key => $value) {
            echo 'Titulo:'.$value['titulo'];
            echo "<br>";
            echo 'Noticia'.$value['conteudo'];
            echo "<hr>";
        }
    }
    */

    //INNER JOIN, junta duas tabelas.
    //ON, funciona basicamente como um WHERE mas ele faz validação que
    //filtra os resultados especificos e que fazerm sentido pra gente.
    //AS, NESSE CASO diz como quer que o  id da tabela posts venha para não dar conflito com o outro id.
    $sql = $pdo->prepare("SELECT `posts`.*, `categorias`.*, `posts`.`id` AS `posts_id` FROM `posts` INNER JOIN
    `categorias` ON `posts`.`categoria_id`=`categorias`.`id`");

    $sql->execute();

    //FETCH_ASSOC, retorna apenas o nome da "coluna.
    $info = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo '<pre>';
    print_r($info);
    echo'</pre>';

?>
