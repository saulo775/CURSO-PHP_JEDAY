<?php

    $json = '{"a":1,"b":"jubileusca","c":3,"d":4,"e":5}';

    //var_dump(json_decode($json));



    //Decodificando o json em objeto.
    $obj = json_decode($json);
    //Decodificando o json em array.
    $arr = json_decode($json, true);

    echo $obj->a;
    echo "<hr>";
    echo $arr['b'];
    echo "<hr>";

    $array = ['nome'=>'saulo', 'cidade'=>'florestown'];
    //codificando um array para formato json.
    $json2 = json_encode($array);

    echo $json2;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type="text/javascript">
        $(function(){
            $.ajax({
                url:'request.php',
                dataType:'json'
            }).done(function(data){
                console.log(data.nome);
            })
        })

    </script>


</body>
</html>