<?php
require_once("../conexao.php");
require_once('../protect.php');

$sql_select = $conexao->prepare("SELECT nome, descricao, data_nasc FROM usuario WHERE email = :email");
$sql_select->bindValue(':email', $_SESSION['email']);
$sql_select->execute();
            
if($sql_select->rowCount() > 0) {
    $dados = $sql_select->fetch();
}     
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Alterar perfil</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <?php
        include_once("config_alterar_perfil.php"); 
        ?>
        <p>
            <label>Alterar foto de perfil</label>
        </p>
        <p>
            <input type="file" name="foto_perfil" id="foto_perfil" accept="image/*">
        </p>
        <p>
            <label>Alterar banner</label>
        </p>
        <p>
            <input type="file" name="banner" id="banner" accept="image/*">
        </p>
        <p>
            <label>Alterar nome</label>
        </p>
        <p>
            <input type="text" name="nome_perfil" id="nome_perfil" value="<?php echo $dados['nome'];?>">
        </p>
        <p>
            <label>Adicionar uma descrição</label>
        </p>
        <p>
            <input type="text" name="descricao_perfil" id="descricao_perfil" value="<?php echo $dados['descricao'];?>">
        </p>
        <p>
            <label>Alterar data de nascimento</label>
        </p>
        <p>
            <input type="date" name="data_nasc" id="data_nasc" value="<?php echo $dados['data_nasc'];?>">
        </p>
        <p>
            <input type="submit" value="Salvar alterações">
        </p>
        <p>
            <button><a href="config_deletar_perfil.php">Deletar perfil</a></button>
        </p>
    </form>
</body>
</html>