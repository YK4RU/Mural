<?php
    if(!isset($_SESSION)){
        session_start();
    }
    if(!isset($_SESSION['email'])){
        die(header('location: index.php'));
    }
?>