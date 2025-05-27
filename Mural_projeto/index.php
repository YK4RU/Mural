<?php
    if(!isset($_SESSION)){
            session_start();
            header('location: Müral/index.php');
    }
?>