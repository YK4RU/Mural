<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mural</title>
    <link rel="stylesheet" href="Assets/style-CSS/style_login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
</head>
<body>
    <!-- <header id="cabecalho">
        <div>
            <div id="titulo">
                <p>
                    MÜRAL
                </p>
            </div>
            <div class="botao">
                <button>Entrar sem conta</button>
            </div>
            <div id="botao_branco">
                <button>Criar</button>
            </div>
        </div>
    </header>
    <aside>
        <div id="">
            <p>
                Explore a critividade !!!
            </p>
        </div>
        <div class="imagem">
            <img src="Assets/imagens/lâmpada.png" alt="lampada">
        </div>
        <div class="imagem">
            <img src="Assets/imagens/Ykaru.png" alt="menino">
        </div>
        
    </aside> -->
        <div id="formulario">
            <form action="" method="POST">
                <?php include_once ("config.php");?>
                <p>
                    <label for="email" class="titulo"> email:</label>     
                    <input type="email" placeholder="teste@gmail.com" class="input" id="email" name="email" require>
                </p>
                <p>
                    <label for="senha"class="titulo">senha:</label>
                    <input type="password" placeholder="12345"  class="input"  id="senha" name="senha" require>
                </p>
                <p>
                    <input type="submit" class="botao">
                </p>
            </form>
        </div>       

</body>
</html>