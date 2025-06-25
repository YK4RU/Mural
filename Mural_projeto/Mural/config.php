<?php
require_once("conexao.php");
if(!isset($_SESSION)){
    session_start();
}

if (isset($_POST["email"]) && isset($_POST["senha"])) {
    $email = trim($_POST["email"]);
    $senha = trim($_POST["senha"]);

    if (empty($email) || empty($senha)) {
        echo '<p class="mensagem_erro">Preencha todos os campos.</p>';
    }
    else {
        $sql_code = "SELECT * FROM usuario WHERE email = :email";
        $instrucao = $conexao->prepare($sql_code);
        $instrucao->bindValue(':email', $email);
        $instrucao->execute();
        $usuario = $instrucao->fetch();

        if ($usuario && password_verify($senha, $usuario['senha'])) {
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['id_usuario'] = $usuario['id_usuario'];
            $_SESSION['nome_de_usuario'] = $usuario['nome_de_usuario'];

            header("location: home_page.php");
            exit;
        }
        else {
            echo '<p class="mensagem_erro">Email ou Senha incorretos.</p>';
        }
    } 
}
?>