<?php
// require_once("../conexao.php");
// require_once('../config.php');
// require_once('../protect.php');

// if(!isset($_SESSION)){
//     session_start();
// }

// $id = $_SESSION['id_usuario'];

// if(isset($_FILES["foto_postagem"]) || isset($_POST["descricao_postagem"])){
//     $descricao = trim($_POST['descricao_postagem']);

//     $arquivo_postagem = $_FILES['foto_postagem'];
//     $nome_arquivo_postagem = uniqid() . '_' . basename($arquivo_postagem['name']);

//     $postagem = 'Assets/imagens/uploads/postagens/'. $nome_arquivo_postagem;

//     $sql_select = $conexao->prepare("SELECT postagem_id, url_da_imagem, descricao_postagem FROM postagem JOIN usuario ON (postagem.postagem_id = usuario.id_usuario) WHERE id_usuario = :id");
//     $sql_select->bindValue(':id', $id);
//     $sql_select->execute();
//     $sql_select->fetch();

//     $sql_insert = $conexao->prepare("INSERT INTO postagem (url_da_imagem, descricao_postagem, postagem_id) VALUES (:postagem, :descricao, :id)");
//     $sql_insert->bindValue(':postagem', $postagem);
//     $sql_insert->bindValue(':descricao', $descricao);
//     $sql_insert->bindValue(':id', $id);
//     $sql_insert->execute();

//     if($sql_insert->execute()){
//         header("location: ../home_page.php");
//         exit;
//     }
    
// }
?>