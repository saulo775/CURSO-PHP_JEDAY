<?php


    $varialvelVerdade = verdade();

    function mostrarNome($nome){
        echo '<h2>my name is: </h2>'.$nome;
        echo "<br/>";
    }

    function calculadora($num1=2, $num2=3){
        echo ($num1+$num2);
        echo "<br/>";
    }

    function verdade(){
        return true;
    }


    mostrarNome("Julia");

    calculadora(25, 2);

    echo $varialvelVerdade
?>