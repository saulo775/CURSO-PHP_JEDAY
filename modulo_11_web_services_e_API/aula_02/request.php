<?php

    if(isset($_POST['request'])&& $_POST['request']=='name_return'){


        $noticias = array('titulo'=>array('noticia 1','noticia 2'), 'conteudo'=>array('conteudo 1','conteudo 2'));
        die(json_encode($noticias));
    }
?>