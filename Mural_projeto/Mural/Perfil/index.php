<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="Assets/style-CSS/style_perfil.css">
</head>
<body>
    <?php
        require_once("config_perfil.php"); 
    ?>
    <div class="container">
        <a href="alterar_perfil.php">a</a>
        <figure>
            <img src="../Assets/imagens/uploads/banner/banner_defaut.png" alt="banner" id="imagem_banner">
        </figure>
        <figure>
            <img src="../Assets/imagens/uploads/perfil/perfil_default.png" alt="perfil" id="imagem_perfil">
        </figure>
    </div>
</body>
</html>