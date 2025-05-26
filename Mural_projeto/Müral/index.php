<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mural</title>
    <link rel="stylesheet" href="style_login.css">
</head>
<body>
    <form action="" method="POST">
        <?php include_once ("config.php");?>
        <p>
            <label for="email"> email:</label>     
            <input type="email" id="email" name="email">
        </p>
        <p>
            <label for="nome-usuario">nome de usuário;</label>
            <input type="text" id="nome-usuario" name="nome-usuario">
        </p>
        <p>
            <label for="senha">senha:</label>
            <input type="password" id="senha" name="senha">
        </p>
        <p>
            <input type="submit">
        </p>
    </form>

</body>
</html>