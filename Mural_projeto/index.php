<?php
    if(!isset($_SESSION)){
            session_start();
            header('location: Mural/index.php');
    }
?>