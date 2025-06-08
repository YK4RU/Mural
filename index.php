<?php
    if(!isset($_SESSION)){
            session_start();
            header('location: Mural_projeto/index.php');
    }
?>