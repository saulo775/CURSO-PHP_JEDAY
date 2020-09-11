<?php

///recursividade
    testes();
    function testes(){
        static $i = 0;

        echo "hello";
        $i++;
        if($i<3){
            testes();
        }
    }

?>