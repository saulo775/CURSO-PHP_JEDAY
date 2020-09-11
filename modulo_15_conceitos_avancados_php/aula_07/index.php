<?php

///Verificar se uma instancia pertence a determinada classe
    class X {

    }

    class Y {

    }

    $x = new X;

    if($x instanceof X){
        echo 'x faz referencia a classe X';
    }

    /// CALBACKS -

    function executar($b, $a = 'saulo'){
        $b($a);
    }
    executar(function($nome){
        echo "Olá ".$nome;
    });
?>