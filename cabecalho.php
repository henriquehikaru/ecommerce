<?php 
    session_start();
    if ( isset($_SESSION['sessaoConectado']) ) {

        $sessaoConectado = $_SESSION['sessaoConectado'];
        $login = $_SESSION['sessaoLogin'];

    } 
    else {
        $sessaoConectado = false;
    }
?>