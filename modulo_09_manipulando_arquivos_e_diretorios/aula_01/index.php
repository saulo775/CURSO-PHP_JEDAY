<?php

    //FILE_EXISTS(), função que verifica se um arquivo já existe.
    if(file_exists('file.txt')){
        echo "<h1>O arquivo existe</h1>";
    }

    // \R\N, é o quebra de linha universal.
    $content = "texto criado pelo php\r\noutra linha\r\noutra linha";

    //FILE_PUT_CONTENTS, cria o arquivo caso não exista ou modifica caso exista.
    file_put_contents('file.txt', $content);

    //FILE_GET_CONTENTS, pega o que está escrito no arquivo, TAMBÉM serve para requisiçoes externas.
    $content2 = file_get_contents('file.txt');

    //NL2BR, pega as quebras de linhas do arquivo e substitui pela tag <br> do html.
    echo nl2br($content);

    //UNLINK, deletar um arquivo.
    unlink('file.txt');
?>