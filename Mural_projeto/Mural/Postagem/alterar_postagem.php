<?php
// require_once("../conexao.php");
// require_once('../protect.php');

// $sql_select = $conexao->prepare("SELECT descricao FROM postagem WHERE email = :email");
// $sql_select->bindValue(':email', $_SESSION['email']);
// $sql_select->execute();
            
// if($sql_select->rowCount() > 0) {
//     $dados = $sql_select->fetch();
// }  

//oque q eu to fazendo meu deus........como usa o id do aaaaaaaaaaaaaaaa
//usar chave estrangeira

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <!-- <?php require_once("config_alterar_postagem.php"); ?> -->
        <p>
            <label>nao sei oq escrever</label>
        </p>
        <p>
            <input type="file" name="foto_postagem" id="foto_postagem" accept="image/*">
        </p>
        <p>
            <input type="text" name="descricao_postagem" id="descricao_postagem" placeholder="Insira uma descrição..." value="<?php echo $dados['descricao'];?>">
        </p>
        <p>
            <input type="submit" value="Salvar alterações">
        </p>
        <p>
            <button><a href="config_deletar_postagem.php">Deletar postagem</a></button>
        </p>
    </form>
</body>
</html>