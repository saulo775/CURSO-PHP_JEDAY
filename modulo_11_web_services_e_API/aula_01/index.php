<form method="post">
    <input type="text" name="address">
    <input type="submit" name="acao" value="enviar">
</form>


<?php

    if(isset($_POST['acao'])){
        $url = urldecode($_POST['address']);
        $str = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$url.'&sensor=true');
        echo '<pre>';

        var_dump($str);

        echo  '</pre>';
    }
?>
