<?php
include_once ('../conexao.php');

if(!isset($_SESSION)){
    session_start();
}

$email = $_SESSION['email'];
  
if(isset($_FILES["foto_perfil"]) || isset($_FILES["banner"]) || isset($_POST["nome_perfil"]) || isset($_POST["descricao_perfil"]) || isset($_POST["data_nasc"])){
    $nome_perfil = trim($_POST['nome_perfil']);
    $descricao = trim($_POST['descricao_perfil']);
    $data_nasc = trim($_POST['data_nasc']);

    $pasta_perfil = '../Assets/imagens/uploads/perfil/';
    $arquivo_perfil = $_FILES['foto_perfil'];
    $nome_arquivo_perfil = uniqid() . '_' . basename($arquivo_perfil['name']);

    $perfil = 'Assets/imagens/uploads/perfil/' . $nome_arquivo_perfil;

    $pasta_banner = '../Assets/imagens/uploads/banner/';
    $arquivo_banner = $_FILES['banner'];
    $nome_arquivo_banner = uniqid() . '_' . basename($arquivo_banner['name']);

    $banner = 'Assets/imagens/uploads/banner/' . $nome_arquivo_banner;

    $sql_select = $conexao->prepare("SELECT url_da_imagem_do_perfil, url_da_imagem_do_banner, nome, descricao, data_nasc FROM usuario WHERE email = :email");
    $sql_select->bindValue(':email', $email);
    $sql_select->execute();

    $sql_update = $conexao->prepare("UPDATE usuario SET url_da_imagem_do_perfil = :url_perfil, url_da_imagem_do_banner = :url_banner, nome = :nome, descricao = :descricao, data_nasc = :data_nasc WHERE email = :email");
    $sql_update->bindValue(':email', $email);
    $sql_update->bindValue(':url_perfil', $perfil);
    $sql_update->bindValue(':url_banner', $banner);
    $sql_update->bindValue(':nome', $nome_perfil);
    $sql_update->bindValue(':descricao', $descricao);
    $sql_update->bindValue(':data_nasc', $data_nasc);
    $sql_update->execute();

    if($sql_update->execute()){
        header("location: index.php");
        exit;
    }
}  
?>