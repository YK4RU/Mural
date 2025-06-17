<?php
require_once("conexao.php");
session_start();

if (isset($_POST["email"]) && isset($_POST["senha"])) {
    $email = trim($_POST["email"]);
    $senha = trim($_POST["senha"]);

    if (empty($email) || empty($senha)) {
        echo "Preencha todos os campos";
    }
    else {
        $sql_code = "SELECT * FROM usuario WHERE email = :email";
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