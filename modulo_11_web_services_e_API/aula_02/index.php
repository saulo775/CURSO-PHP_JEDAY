<!-- <form method="post">
    <input type="text" name="address">
    <input type="submit" name="acao" value="enviar">
</form> -->

<?php

    //iniciando o curl pela variável
    $curl = curl_init();

    //local que se quer.
    curl_setopt($curl, CURLOPT_URL,"http://localhost/PHP_JEDAY/modulo_11_web_services_e_API/aula_02/request.php");
    //diz que quer que seja um post.
    curl_setopt($curl, CURLOPT_POST, 1);

    // In real life you should use something like:
    curl_setopt($curl, CURLOPT_POSTFIELDS,http_build_query(array('request' => 'name_return')));

    // Receive server response ...
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    //executa o curl
    $server_output = curl_exec($curl);
    //fecha o curl
    curl_close ($curl);

    //requisição com curl no server local.
    $resultado = json_decode($server_output);

    /*echo $resultado->titulo[0];
    echo '<br>';
    echo $resultado->conteudo[0];*/




    /*=====fazendo requisição pelo google=====*/
    /*=====fazendo requisição pelo google=====*/
    /*=====fazendo requisição pelo google=====*/

    $endereco = urlencode('coqueiros');
    $curl = curl_init();

    //local que se quer.
    curl_setopt($curl, CURLOPT_URL,"https://maps.googleapis.com/maps/api/geocode/json?address=$endereco");

    // Receive server response ...
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    //executa o curl
    $server_output = curl_exec($curl);
    //fecha o curl
    curl_close ($curl);

    //requisição com curl no server local.
    $resultado = json_decode($server_output);

    echo $server_output;

?>
