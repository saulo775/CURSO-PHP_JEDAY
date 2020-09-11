<?php

    ///static faz com que a variaável declarada dessa forma seja incrementada dentro da função.

    function teste2(){
        static $n = 0;
        $n++;
        return $n;
    }
    echo teste2();
    echo '<br>';
    echo teste2();

?>
