<?php
    if(!isset($_SESSION)){
        session_start();
    }
    session_unset();
    session_destroy();
    header('location: pagina_inicial.php');
?>