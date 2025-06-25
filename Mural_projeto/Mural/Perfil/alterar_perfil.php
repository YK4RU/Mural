<?php
require_once("../conexao.php");
require_once('../protect.php');

$sql_select = $conexao->prepare("SELECT url_da_imagem_do_perfil, url_da_imagem_do_banner, nome, descricao, data_nasc FROM usuario WHERE email = :email");
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
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perfil</title>
        <link rel="stylesheet" href="../Assets/style-CSS/style_alt_perfil.css">
    </head>
    <body>
        <div id="formulario">
            <form action="" method="POST" enctype="multipart/form-data">
                <?php
                include_once("config_alterar_perfil.php"); 
                ?>

                <div id="imagem_banner">
                    <?php if (!empty($dados['url_da_imagem_do_banner'])): ?>
                        <img src="../<?php echo $dados['url_da_imagem_do_banner']; ?>" alt="Banner atual">
                    <?php endif; ?>
                    <p id="banner_txt">
                        Alterar banner
                    </p>
                    <p>
                        <input type="file" name="banner" id="banner" accept="image/*">
                    </p>
                </div>
                <div id="imagem_perfil">
                    <?php if (!empty($dados['url_da_imagem_do_perfil'])): ?>
                        <img src="../<?php echo $dados['url_da_imagem_do_perfil']; ?>" alt="Foto de perfil atual">
                    <?php endif; ?>
                    <p id="perfil_txt">
                        Alterar imagem de perfil
                    </p>
                    <p>
                        <input type="file" name="foto_perfil" id="foto_perfil" accept="image/*">
                    </p>
                </div>


                <div>
                    <p>
                        <label for="nome_perfil" id="nome">Alterar nome</label>
                    </p>
                    <p>
                        <input type="text" class="input" name="nome_perfil" id="nome_perfil" value="<?php echo $dados['nome'];?>">
                    </p>
                </div>
                <div>
                    <p>
                        <label for="descricao_perfil" id="desc_perfil">Adicionar uma descrição</label>
                    </p>
                    <p>
                        <input type="text"  class="input" name="descricao_perfil" id="descricao_perfil" value="<?php echo $dados['descricao'];?>">
                    </p>
                </div>
                <div>
                    <p>
                        <label for="data_nasc" id="data_perfil">Alterar data de nascimento</label>
                    </p>
                    <p>
                        <input type="date" class="input" name="data_nasc" id="data_nasc" value="<?php echo $dados['data_nasc'];?>">
                    </p>
                </div>
            
                <p>
                    <input type="submit" value="Salvar alterações" id="botao_salvar">
                </p>
                <p>
                    <button><a href="config_deletar_perfil.php" id="botao_deletar">Deletar perfil</a></button>
                </p>
            </form>
        </div>
    </body>
</html>