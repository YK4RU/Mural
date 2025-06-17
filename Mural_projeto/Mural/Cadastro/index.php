<?php
    require_once('../protect.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar conta</title>
</head>
<body>
    <div id="formulario">
        <form action="" method="POST">
            <?php require_once ("config_cadastro.php");?>
            <p>
                <label for="email" class="titulo"> email:</label>     
                <input type="email" class="input" id="email" name="email" require>
            </p>
            <p>
                <label for="email" class="titulo"> nome de usuário:</label>     
                <input type="text" class="input" id="nome_de_usuario" name="nome_de_usuario" require>
            </p>
            <p>
                <label for="senha"class="titulo">senha:</label>
                <input type="password"  class="input"  id="senha" name="senha" require>
            </p>
            <p>
                <input type="submit" class="botao">
            </p>
        </form>
    </div>
</body>
</html>