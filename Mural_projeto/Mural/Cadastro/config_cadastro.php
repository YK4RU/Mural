<?php
require_once("../conexao.php");
if(!isset($_SESSION)){
    session_start();
}

if (isset($_POST["email"]) && isset($_POST["senha"]) && isset($_POST["nome_de_usuario"])) {
    $email = trim($_POST["email"]);
    $senha = trim($_POST["senha"]);
    $nome_de_usuario = trim($_POST["nome_de_usuario"]);

    if (empty($email) || empty($senha) || empty($nome_de_usuario)) {
        echo "Preencha todos os campos";
    }
    else {
        $sql_code = $conexao->prepare("INSERT INTO usuario (email, senha, nome_de_usuario) VALUES (:email, :senha, :nome_usuario )");
        $sql_code->bindValue(':email', $email);
        $sql_code->bindValue(':senha', $senha);
        $sql_code->bindValue(':nome_usuario', $nome_de_usuario);
        $sql_code->execute();

        if ($sql_code->rowCount() > 0) {
            $sql_select = $conexao->prepare("SELECT * FROM usuario WHERE email = :email");
            $sql_select->bindValue(':email', $email);
            $sql_select->execute();
            $usuario = $sql_select->fetch();

            $_SESSION['email'] = $usuario['email'];
            $_SESSION['nome_de_usuario'] = $usuario['nome_de_usuario'];
            header("location: ../home_page.php");
            exit;
        }
    
    } 
}
?>