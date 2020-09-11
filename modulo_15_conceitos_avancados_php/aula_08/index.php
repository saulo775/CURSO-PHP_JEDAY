<?php
/*==== Expressoes Regulares com PHP====*/

///Verificar se existe algum conteúdo dentro da variável.
    $teste = "Guilherme";
    if(preg_match('/lher/', $teste)){
        echo 'verdade';
    }

///Retorna o que tivera antes e depois do que foi encontrado.
    preg_match('/(.*?)lhe(.*)/', $teste, $retorno);
    echo '<br/>';
    echo $retorno[0];
    echo '<br/>';
    echo $retorno[1];
    echo '<br/>';
    echo $retorno[2];
    echo '<br/>';


    function cpfValido($cpf){
        $expressao = '/[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}/';
        return preg_match($expressao, $cpf);
    }
    if(isset($_POST['acao'])){
        $cpf = $_POST['cpf'];
        if (cpfValido($cpf)) {
            echo 'O cpf é valido';
        }else{
            echo 'O cpf não é válido';
        }
    }
?>

<form method="post" >
    <input type="text" name="cpf">
    <input type="submit" name="acao">
</form>