<?php 
require_once('../protect.php');
require_once("../conexao.php");

$id = $_SESSION['id_usuario'];

$sql_select = $conexao->prepare("SELECT descricao_postagem FROM postagem WHERE id_usuario = :id");
$sql_select->bindValue(':id', $id);
$sql_select->execute();
            
if($sql_select->rowCount() > 0) {
    $dados = $sql_select->fetch();
}  

$sql_select_img = $conexao->prepare("SELECT url_da_imagem FROM postagem WHERE id_usuario = :id");
$sql_select_img->bindValue(':id', $id);
$sql_select_img->execute();
$imagem = $sql_select_img->fetch();


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/style-CSS/style_criar_postagem.css">
    <title>Criar postagem</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <?php require_once("config_criar_postagem.php"); ?>
        <p id="titulo">Criar postagem</p>
        <div>
            <a href="../Perfil" id="sair">X</a>
        </div>
        <div id="imagem_postagem">
            <img src="../Assets/imagens/uploads/postagens/imagem_default.png" alt="">
        </div>
        <p>
            <input type="file" name="foto_postagem" id="foto_postagem" accept="image/*">
        </p>
        <p>
            <input type="text" name="descricao_postagem" id="descricao_postagem" placeholder="Insira uma descrição...">
        </p>
        <p>
            <button type="submit" id="criar"><img src="../Assets/imagens/aviaozinho.png" alt=""></button>
        </p>
    </form>
</body>
</html>