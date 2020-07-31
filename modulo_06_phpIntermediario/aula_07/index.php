<?php
    $nome = 'saulo';


    /*==== break serve para parar o looping ==== */

    switch($nome){
        case 'saulo':
            echo "minha variável é saulo";
        break;
        case 'joao':
            echo "minha variável é joao";
        break;

    }

    for($i=0; $i<10; $i++){
        echo $i;
        echo "<hr/>";
        if($i==5)
        break;
    }


    /*==== Continue pula um trecho do código */

    for($i=0; $i<10; $i++){
        if($i==5){
            continue;
        }
        echo "<hr/>";
        echo $i;
    }
?>