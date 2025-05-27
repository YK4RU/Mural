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
    <div id="formulario">
        <form action="" method="POST">
            <?php include_once ("config.php");?>
            <p>
                <label for="email" class="titulo"> email:</label>     
                <input type="email" placeholder="teste@gmail.com" class="input" id="email" name="email" require>
            </p>
            <p>
                <label for="nome-usuario" class="titulo">nome de usuário:</label>
                <input type="text" class="input" placeholder="não obrigatório..."   id="nome-usuario" name="nome-usuario">
            </p>
            <p>
                <label for="senha"class="titulo">senha:</label>
                <input type="password" placeholder="12345"  class="input"  id="senha" name="senha" require>
            </p>
            <p>
                <input type="submit" id="botao">
            </p>
        </form>
    </div>

</body>
</html>