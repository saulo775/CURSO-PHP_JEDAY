<?php
    session_start();

    include('facebook-php-sdk/autoload.php');
    use Facebook\Facebook;
    use Facebook\Exceptions\FacebookResponseException;
    use Facebook\Exceptions\FacebookSDKException;

    $appId = '299623464697907';
    $appSecret = 'a7b5fc863115444dd20ce9e2a672b6cb';
    $redirect = 'http://localhost/PHP_JEDAY/modulo_11_web_services_e_API/aula_03/login-facebook/';
    $fbPermission = array('email');

    $fb = new Facebook(array(
        'app_id'=>$appId,
        'app_secret'=>$appSecret,
        'defaul_grap_version'=>'v2.2'
    ));

    $helper = $fb->getRedirectLoginHelper();

    try{
        if(isset($_SESSION['facebook_access_token'])){
            $accessToken = $_SESSION['facebook_access_token'];
        }else{
            $accessToken = $helper->getAccessToken();
        }
    }catch(FacebookResponseException $e){}
?>
