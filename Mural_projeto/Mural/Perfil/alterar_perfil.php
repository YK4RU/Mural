<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Perfil de usuário</title>
</head>
<body>
    <?php
        include_once("config_alterar_perfil.php");   
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
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
            <input type="text" name="nome_perfil" id="nome_perfil" value="<?php echo $_POST["nome_perfil"]; ?>">
        </p>
        <p>
            <label>Adicionar uma descrição</label>
        </p>
        <p>
            <input type="text" name="descricao_perfil" id="descricao_perfil" value="<?php echo $_POST["descricao_perfil"]; ?>">
        </p>
        <p>
            <label>Alterar data de nascimento</label>
        </p>
        <p>
            <input type="date" name="data_nasc" id="data_nasc" value="<?php echo $_POST["data_nascs"]; ?>">
        </p>
        <p>
            <input type="submit" value="Entrar" id="botao_entrar">
        </p>
        <p>
            <button><a href="config_deletar_perfil.php">Deletar perfil</a></button>
        </p>
    </form>
</body>
</html>