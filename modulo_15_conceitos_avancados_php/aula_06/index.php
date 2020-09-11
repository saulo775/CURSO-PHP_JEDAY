<?php

//variáveis como função
 $func  = function($nome){
     echo $nome;
 };

 echo $func('saulo');
 echo '<br/>';

//função dentro de função
 function one(){
     function two(){
         echo "hello world!";
     }
     two();
 }
 one();
?>