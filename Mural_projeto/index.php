<?php
    if(!isset($_SESSION)){
            session_start();
            header('location: Müral/pagina_login.php');
    }
?>