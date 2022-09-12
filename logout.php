<?php

//Codigo para cerrar sesión
session_start();
session_unset();
session_destroy();
header("Location: /curso-php/google2session/index.php");

?>