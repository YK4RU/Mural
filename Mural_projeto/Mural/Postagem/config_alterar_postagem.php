<?php
require_once("../conexao.php");
require_once('../protect.php');

$id_post = $_SESSION['postagem_id'];

if(isset($_GET["descricao_postagem"])){
    $descricao = trim($_GET['descricao_postagem']);

    $sql_select = $conexao->prepare("SELECT descricao_postagem FROM postagem WHERE postagem_id = :id_post");
    $sql_select->bindValue(':id', $id);
    $sql_select->execute();

    $sql_update = $conexao->prepare("UPDATE postagem SET descricao_postagem = :descricao WHERE postagem_id = :id_post");
    $sql_update->bindValue(':id_post', $id_post);
    $sql_update->bindValue(':descricao', $descricao);

    if($sql_update->execute()){
        header("location: ../Perfil");
        exit;
    }
}

?>