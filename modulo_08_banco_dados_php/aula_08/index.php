<?php

    define('HOST', 'localhost');
    define('DB', 'modulo_08b');
    define('USER', 'root');
    define('PASS', '');

    /*  NESSE CASO, caso ocorra algum erro de conecxão com o banco de dados em try,
        que é onde está sendo feita a requisição, o erro e jogado na variavel $e
        e pode ser tratado com se queira, impedindo assim que o pdo mostre pra o
        usuário informaçoes confidenciais.
    */
    try{
        $pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::
            MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }catch(Exception $e){
        echo 'erro ao conectar';
    }
?>