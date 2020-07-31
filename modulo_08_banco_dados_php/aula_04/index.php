<?php
    $pdo = new PDO('mysql:host=localhost;dbname=modulo_08','root','');

    $id = 5;

    //DELETE FROM,  deleta linhas da tabela.
    $sql = $pdo->prepare("DELETE FROM `clientes` WHERE id = ?");


    //passar os valores pelo execute da mais segurança a aplicação.
    if ($sql->execute(array($id))) {
        echo "<p>Cliente Deletado com sucesso!!!</p>";
    }

?>