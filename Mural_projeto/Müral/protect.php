<?php
    if(!isset($_SESSION)){
        session_start();
    }
    if(!isset($_SESSION['email'])){
        die('ei, tu não é pra tá aqui não... <p><a href="logout.php">Sair</a></p>');
    }
?>