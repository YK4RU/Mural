<?php require_once('../protect.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <?php require_once("config_postagem.php"); ?>
        <p>
            <label>nao sei oq escrever</label>
        </p>
        <p>
            <input type="file" name="foto_postagem" id="foto_postagem" accept="image/*">
        </p>
        <p>
            <input type="text" name="descricao_postagem" id="descricao_postagem" placeholder="Insira uma descrição...">
        </p>
        <p>
            <input type="submit">
        </p>
    </form>
</body>
</html>