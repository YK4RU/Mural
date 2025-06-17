<?php
    require_once("../conexao.php");
    require_once('../protect.php');

    $sql_select = $conexao->prepare("SELECT * FROM usuario WHERE email = :email");
    $sql_select->bindValue(':email', $_SESSION['email']);
    $sql_select->execute();

    if ($sql_select->rowCount() > 0) {
        $sql_delete = $conexao->prepare('DELETE FROM usuario WHERE email = :email');
        $sql_delete->bindValue(':email', $_SESSION['email']);
        $sql_delete->execute(); 

        header("location: ../index.php");
        exit();
    }   
?>