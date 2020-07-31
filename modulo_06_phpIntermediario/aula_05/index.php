<?php

    //trabalhando com datas

    date_default_timezone_set('America/Sao_Paulo');

    $data = date('d/m/Y H:m:s',time()+(60*10));

    echo  $data;
    echo "<br/>";


    //função include de arquivos para html

    $titulo_site = "Meu titulo here";
    include('header.php');
?>

<h1>Meu conteúdo da home</h1>

<?php
    include('footer.php');
?>