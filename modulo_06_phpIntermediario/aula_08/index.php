<?php

/*==== ARRAY_MERGE serve para juntar dois arrays ====*/


$array1 = array("chave1"=>"valor1", "chave2"=>"valor2");
$array2 = array("chave3" => "valor3", "chave4" => "valor4");
$result = array_merge($array1, $array2);
print_r($result);

/*==== array_intersect_key serve para encontrar as chaves iguais em dois ou mais vetores ====*/


$array1 = array("chave1"=>"valor1", "chave2"=>"valor2");
$array2 = array("chave1"=>"outro valor","chave3" => "valor3", "chave4" => "valor4");
print_r(array_intersect_key($array1, $array2));

?>