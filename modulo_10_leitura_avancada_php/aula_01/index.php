<?php

    //Ler o arquivo xml.
    $xml = simplexml_load_file('arquivo.xml');
    print_r($xml);

    //criar xml a partir de um array


    $arr = ['saulo'=>'nome', '25'=>'idade'];

    $xml = new SimpleXMLElement('<root/>');
    array_walk_recursive($arr, array($xml,'addChild'));
    file_put_contents('arquivo.xml', $xml->asXML());



    $content = simplexml_load_file('arquivo.xml');
    $aux = $content->idade ;
    echo $aux;
?>
