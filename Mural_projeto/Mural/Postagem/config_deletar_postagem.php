<?php
require_once("../conexao.php");
require_once('../protect.php');

$id = $_SESSION['id_usuario'];
$id_post = $_SESSION['postagem_id'];

$sql_select = $conexao->prepare("SELECT * FROM postagem INNER JOIN usuario ON (postagem.id_usuario = usuario.id_usuario) WHERE usuario.id_usuario = :id");
$sql_select->bindValue(':id', $id);
$sql_select->execute();

if ($sql_select->rowCount() > 0) {
    $sql_delete = $conexao->prepare('DELETE FROM postagem WHERE postagem_id = :id_post');
    $sql_delete->bindValue(':id_post', $id_post);
    $sql_delete->execute(); 

    header("location: ../home_page.php");
    exit();
}   
?>