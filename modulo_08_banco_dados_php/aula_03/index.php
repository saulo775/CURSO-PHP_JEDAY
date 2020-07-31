<?php
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_08','root','');

    $id = 5;

    //UPDATE, pode atualizar os valores dentro de uma uma ou mais colunas na tabela.
    //SET, aponta quais colunas são alteradas.
    //WHERE, defini quando pode ser alterado, uma espécie de if do PDO.
    $sql = $pdo->prepare("UPDATE `clientes` SET nome = 'jurema', sobrenome = 'lambisgoia'
        WHERE id=$id OR sobrenome = 'ingrata'");


    if ($sql->execute()) {
        echo "<p>Cliente atualizado com sucesso!!!</p>";
    }

?>