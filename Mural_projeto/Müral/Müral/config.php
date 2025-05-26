<?php
require_once("conexao.php");
session_start();

if (isset($_POST["email"]) && isset($_POST["senha"]) && isset($_POST["nome-usuario"])) {
    $email = trim($_POST["email"]);
    $senha = trim($_POST["senha"]);
    $nome_usuario = trim($_POST["nome-usuario"]);

    if (empty($email)) {
        echo "O email é obrigatório";
    }
    elseif (empty($senha)) {
        echo "A senha é obrigatória";
    } 
    else {
        $sql_code = "SELECT * FROM login WHERE email = :email";
        $instrucao = $conexao->prepare($sql_code);
        $instrucao->bindValue(':email', $email);
        $instrucao->execute();
        $usuario = $instrucao->fetch();


        if ($usuario and $senha === $usuario['senha']) {
                $_SESSION['email'] = $usuario['email'];
                header("location: home_page.php");
                exit;
        } 
        else {
                echo "Email ou Senha incorreta";
        }
    } 
}
?>