<?php
/*==== Variáveis externas em funções====*/


$nome = 'saulo';
$teste = function() use ($nome){
    echo 'ola '.$nome.'!';
};

$teste();

?>
