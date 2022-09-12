<?php

    require_once 'vendor/autoload.php';
    require_once 'credentials.php';
    //Credenciales
    //$clientID = '316412408446-n3i59sgljmatq61i0oqtomltbd0ln5um.apps.googleusercontent.com';
    //$clientSecret = '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';
    //$redirectUri = 'http://localhost/curso-php/google2session/welcome.php';
    $clientID = $_ENV['clientID'];
    $clientSecret = $_ENV['clientSecret'];
    $redirectUri = $_ENV['redirectUri'];

    //Crear un objeto de Google Client para realizar una peticion a la API de Google
    $client = new Google_Client();
    $client->setClientId($clientID);
    $client->setClientSecret($clientSecret);
    $client->setRedirectUri($redirectUri);
    $client->addScope("email");
    $client->addScope("profile");


?>