<?php
require_once("../conexao.php");
require_once('../protect.php');

if(!isset($_SESSION)){
    session_start();
}

$id = $_SESSION['id_usuario'];

$sql_select = $conexao->prepare("SELECT * FROM postagem INNER JOIN usuario ON (postagem.id_usuario = usuario.id_usuario) WHERE usuario.id_usuario = :id");
$sql_select->bindValue(':id', $id);
$sql_select->execute();
$postagem = $sql_select->fetch();

$_SESSION['postagem_id'] = $postagem['postagem_id'];

$id_post = $_SESSION['postagem_id'];

if(isset($_GET["descricao_postagem"])){
    $descricao = trim($_GET['descricao_postagem']);

    $sql_select = $conexao->prepare("SELECT descricao_postagem FROM postagem INNER JOIN usuario ON (postagem.id_usuario = usuario.id_usuario) WHERE postagem.postagem_id = :id_post");
    $sql_select->bindValue(':id_post', $id_post);
    $sql_select->execute();

    $sql_update = $conexao->prepare("UPDATE postagem SET descricao_postagem = :descricao WHERE postagem_id = :id_post");
    $sql_update->bindValue(':id_post', $id_post);
    $sql_update->bindValue(':descricao', $descricao);

    if($sql_update->execute()){
        header("location: ../Perfil");
        exit;
    }
}

var_dump($id_post);
?>