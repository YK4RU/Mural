<?php
require_once("../conexao.php");
require_once('../protect.php');

if(!isset($_FILES["foto_postagem"])){
        echo "Adicione uma imagem";
}

$id = $_SESSION['email'];

if(isset($_FILES["foto_postagem"]) || isset($_POST["descricao_postagem"])){
    $descricao = trim($_POST['descricao_postagem']);

    //oque q eu to fazendo meu deus........como usa o id do aaaaaaaaaaaaaaaa
    //usar chave estrangeira

    else{
        $sql_select = $conexao->prepare("SELECT url_da_imagem, descricao FROM postagem WHERE postagem_id = :id");
        $sql_select->bindValue(':id', $id);
        $sql_select->execute();

        $sql_insert = $conexao->prepare("INSERT INTO postagem (url_da_imagem, descricao) VALUES (:postagem, :descricao)");
        $sql_insert->bindValue(':postagem', $postagem);
        $sql_insert->bindValue(':descricao', $descricao);
        $sql_insert->execute();

        if($sql_insert->execute()){
            header("location: ../home_page.php");
            exit;
        }
    }
}
?>