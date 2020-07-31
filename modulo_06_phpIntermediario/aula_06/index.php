<?php

    // substr serve para recortar uma string

    $conteudo = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus gravida sem at risus varius vestibulum. Vestibulum nec blandit tortor. In placerat massa eros, a hendrerit nulla condimentum auctor. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam imperdiet leo leo, quis varius justo fermentum vitae. Curabitur eget ligula turpis. Nullam nec sagittis diam, eu interdum velit. Fusce placerat, lorem id sagittis dapibus, justo libero vulputate erat, ullamcorper consequat nibh augue a libero. Donec non erat quis risus lacinia sollicitudin. Ut turpis dui, porttitor id tempus et, congue et tellus. Mauris euismod vehicula velit maximus varius. In ex arcu, tempus ac eros ac, commodo dictum mauris. Cras ac tincidunt lectus. Nam sed pulvinar nulla. Etiam sed lorem bibendum, rhoncus purus vel, malesuada mi.";

    echo substr($conteudo, 0, 90);

    // explode transforma uma string em vetor

    $nome = "saulo victor oliveira mendes";

    $nomes =  explode(' ', $nome);

    print_r($nomes);


    //inplode  transforma um vetor de strings em uma string

    $nomes = implode(' ', $nomes);

    echo $nomes;


    //strip_tags retira todo o código html

    $conteudos = "<h1>saulo</h1> Outra coisa";

    echo "<br/>";
    echo strip_tags($conteudos);

    //htmlentities mostra o html de forma resumida

    echo "<br/>";
    echo "<br/>";
    echo htmlentities('<div>hey my dude</div>');


?>