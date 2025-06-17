<?php
require_once("../conexao.php");
require_once('../protect.php');

//oque q eu to fazendo meu deus........como usa o id do aaaaaaaaaaaaaaaa
//usar chave estrangeira

$email = $_SESSION['email'];

if(isset($_FILES["foto_postagem"]) || isset($_POST["descricao_postagem"])){
    $descricao = trim($_POST['descricao_postagem']);
    
    $pasta_postagem = '../Assets/imagens/uploads/postagem/';
    $arquivo_postagem = $_FILES['foto_postagem'];
    $nome_arquivo = uniqid() . '_' . basename($arquivo_postagem['name']);

    $postagem = 'Assets/imagens/uploads/postagem/' . $nome_arquivo;

    $sql_select = $conexao->prepare("SELECT url_da_imagem, descricao FROM postagem WHERE email = :email");
    $sql_select->bindValue(':email', $email);
    $sql_select->execute();

    $sql_update = $conexao->prepare("UPDATE postagem SET url_da_imagem = :postagem,  descricao = :descricao WHERE email = :email");
    $sql_update->bindValue(':email', $email);
    $sql_update->bindValue(':postagem', $postagem);
    $sql_update->bindValue(':descricao', $descricao);
    $sql_update->execute();

    if($sql_update->execute()){
        header("location: ../home_page.php");
        exit;
    }
}

?>