<?php

    require 'vendor/autoload.php';
    use FlyingLuscas\Correios\Client;
    use FlyingLuscas\Correios\Service;


    $correios = new Client;

    print_r($correios->zipcode()
        ->find('32673-135'));

    print_r($correios
        ->freight()
        ->origin('68385-000')
        ->destination('32673-135')
        ->services(Service::SEDEX, Service::PAC)
        ->item(16, 16, 16, .3, 1) // largura, altura, comprimento, peso e quantidade
        ->calculate());


?>