<?php
    //funçoes die e sleep


    //sleep coloca o servidor pra dormir por um tempo

    sleep(0);
    echo "1";
    echo "<br/>";

    sleep(1);
    echo "2";
    echo "<br/>";

    sleep(1);
    echo "3";
    echo "<br/>";



    //função die() mata todo o código abaixo dela
    $nome = "jiresvalo";

    if($nome == "jiresvaldo"){
        echo "tudo certo";
    }else{
        die("O SCRIPT PAROU DE SER EXECUTADO");
    }

    sleep(5);
    echo "1";

    sleep(5);
    echo "2";

    sleep(1);
    echo "3";
?>