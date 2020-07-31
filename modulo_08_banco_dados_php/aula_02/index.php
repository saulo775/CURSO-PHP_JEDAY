<?php

     //seta o formato que espera a data
    date_default_timezone_set('America/sao_paulo');

    $pdo = new PDO('mysql:host=localhost;dbname=modulo_08','root','');

    // ISSET - função que verifica se uma variável está definida
    if(isset($_POST['acao'])){

        //POST - método p/ pegar dados de formulários e passar para o DB
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $momento_registro = date('Y-m-d H:i:s');


        //query para PREPARAR os  valores para o DB
        $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?)");
        //execute query p/ EXECUTAR a inserção  dos dados no DB
        $sql->execute(array($nome, $sobrenome, $momento_registro));

        echo 'Cliente inserido com sucesso';
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro no banco</title>
</head>
<body>
    <form method="post">
        <input type="text" name="nome" required>
        <input type="text" name="sobrenome" required>
        <input type="submit" name="acao" value="Enviar!">
    </form>
</body>
</html>