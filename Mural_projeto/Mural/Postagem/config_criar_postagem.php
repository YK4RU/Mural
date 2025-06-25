<?php
require_once("../conexao.php");
require_once('../config.php');
require_once('../protect.php');

if(!isset($_SESSION)){
    session_start();
}

$id = $_SESSION['id_usuario'];

if(isset($_FILES["foto_postagem"]) || isset($_POST["descricao_postagem"])){
    $descricao = trim($_POST['descricao_postagem']);

    $pasta_postagem = '../Assets/imagens/uploads/postagens/';
    $arquivo_postagem = $_FILES['foto_postagem'];
    $nome_arquivo_postagem = uniqid() . '_' . basename($arquivo_postagem['name']);

    move_uploaded_file($arquivo_postagem['tmp_name'], $pasta_postagem . $nome_arquivo_postagem);

    $postagem = 'Assets/imagens/uploads/postagens/'. $nome_arquivo_postagem;

    $sql_insert = $conexao->prepare("INSERT INTO postagem (id_usuario, url_da_imagem, descricao_postagem) VALUES (:id_user, :postagem, :descricao)");
    $sql_insert->bindValue(':postagem', $postagem);
    $sql_insert->bindValue(':descricao', $descricao);
    $sql_insert->bindValue(':id_user', $id);
    $sql_insert->execute();

    if ($sql_insert->rowCount() > 0) {
        $sql_select = $conexao->prepare("SELECT * FROM postagem INNER JOIN usuario ON (postagem.id_usuario = usuario.id_usuario) WHERE usuario.id_usuario = :id");
        $sql_select->bindValue(':id', $id);
        $sql_select->execute();
        $postagem = $sql_select->fetch();

        $_SESSION['postagem_id'] = $postagem['postagem_id'];
        
        header("location: ../Perfil");
        exit;
    }
    
}
?>