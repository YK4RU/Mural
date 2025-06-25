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
        echo '<p class="mensagem_erro">Preencha todos os campos.</p>';
    } 
    else {

        $sql_verifica = $conexao->prepare("SELECT * FROM usuario WHERE email = :email OR nome_de_usuario = :nome_usuario");
        $sql_verifica->bindValue(':email', $email);
        $sql_verifica->bindValue(':nome_usuario', $nome_de_usuario);
        $sql_verifica->execute();

        if ($sql_verifica->rowCount() > 0) {
            echo '<p class="mensagem_erro">E-mail ou nome de usuário já cadastrado.</p>';
        }
        else {

            $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

            $sql_code = $conexao->prepare("INSERT INTO usuario (email, senha, nome_de_usuario) VALUES (:email, :senha, :nome_usuario )");
            $sql_code->bindValue(':email', $email);
            $sql_code->bindValue(':senha', $senha_hash);
            $sql_code->bindValue(':nome_usuario', $nome_de_usuario);
            $sql_code->execute();

            if ($sql_code->rowCount() > 0) {
                $sql_select = $conexao->prepare("SELECT * FROM usuario WHERE email = :email");
                $sql_select->bindValue(':email', $email);
                $sql_select->execute();
                $usuario = $sql_select->fetch();

                $_SESSION['email'] = $usuario['email'];
                $_SESSION['id_usuario'] = $usuario['id_usuario'];
                $_SESSION['nome_de_usuario'] = $usuario['nome_de_usuario'];
                header("location: ../home_page.php");
                exit;
            }
    
        } 
    }
}
?>