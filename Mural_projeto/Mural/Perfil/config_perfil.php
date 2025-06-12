<?php
    require_once("../conexao.php");
    if(!isset($_SESSION)){
        session_start();
    }

    if (!isset($_SESSION['email'])) {
        header("Location: ../index.php");
        exit;
    }
    else{
        $email = $_SESSION['email'];
        $sql_code = $conexao->prepare("SELECT url_da_imagem_do_perfil, url_da_imagem_do_banner, nome, descricao, data_nasc FROM usuario WHERE email = :email");
        $sql_code->bindValue(':email', $email);
        $sql_code->execute();
        $user = $sql_code->fetch();
    }
    if (!$user) {
        die("Usuário não encontrado.");
    }

?>