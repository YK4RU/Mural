<?php
require_once("../conexao.php");
require_once('../protect.php');

if (isset($_GET['id'])) {
    $id_post = intval($_GET['id']);
}

$sql_select = $conexao->prepare("SELECT descricao_postagem, url_da_imagem FROM postagem WHERE postagem_id = :id_post");
$sql_select->bindValue(':id_post', $id_post);
$sql_select->execute();
            
if($sql_select->rowCount() > 0) {
    $dados = $sql_select->fetch();
}  

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/style-CSS/style_alt_postagem.css">
    <title>Alterar postagem</title>
</head>
<body>
    <form action="" method="post">
        <?php require_once("config_alterar_postagem.php"); ?>
        <p id="titulo">Alterar postagem</p>
        <div>
            <a href="../Perfil" id="sair">X</a>
        </div>
        <div id="imagem_postagem">
            <?php if (!empty($dados['url_da_imagem'])): ?>
                <img src="../<?php echo $dados['url_da_imagem']; ?>" alt="">
            <?php endif; ?>
        </div>
            <input type="text" name="descricao_postagem" id="descricao_postagem" placeholder="Insira uma descrição..." value="<?php echo $dados['descricao_postagem'];?>">
            <input type="submit" value="Salvar alterações" id="botao_salvar">
            <button><a href="config_deletar_postagem.php" id="botao_deletar">Deletar postagem</a></button>
    </form>
</body>
</html>