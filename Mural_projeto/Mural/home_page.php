<?php
    // require_once('protect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="Assets/style-CSS/style_home.css">
<body>
    <header>
        <div id="cabecalho">
            <p>
                MÜRAL
            </p>
        </div>
        <div>
            <button><a href="Perfil/index.php"><img src="Assets/imagens/Olho_aberto.png" alt="foto_de_perfil"></a></button>            
        </div>
        <div id="search_box">
            <input type="text" placeholder="Pesquisar..." id="search_input">
            <img src="Assets/imagens/search.png" alt="" id="search_png">
        </div>
    </header>
    <div>
        <p>
            <a href="logout.php">Sair</a>
        </p>        
    </div>
    <div>
        <p>
            <button><a href="Postagem/index.php"><img src="Assets/imagens/flor.png" alt="criar"></a></button>
        </p>        
    </div>
</body>
</html>