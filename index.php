<?php

require_once 'vendor/autoload.php';

session_start();

//Si existe una sesion ya iniciada
if(isset($_SESSION['login'])){
    //Validar si obtenemos o no el atributo 'hd' de la URL
    if(isset($_SESSION['hd'])){
        $hd = "&hd=".$_SESSION['hd'];
    }else{
        $hd = "";
    }
    //Redirigir a la pestaña de bienvenida
    $location = "Location: /curso-php/google2session/welcome.php?code=".$_SESSION['code']."&scope=".$_SESSION['scope']."&authuser=".$_SESSION['authuser'].$hd."&prompt=".$_SESSION['prompt'];
    header($location);
}

//Si no existe sesion iniciada, comenzamos con el proceso de autenticacion con Google
include 'auth.php';


//Si no existe codigo de sesion iniciada, mostramos un boton de enlace para logearse con Google
if (!isset($_GET['code'])){
    echo "<a href='".$client->createAuthUrl()."'>Google Login</a>";
}

?>