<?php
require_once("../conexao.php");
require_once('../protect.php');

$sql_select = $conexao->prepare("SELECT url_da_imagem_do_perfil, url_da_imagem_do_banner, nome, descricao, nome_de_usuario FROM usuario WHERE email = :email");
$sql_select->bindValue(':email', $_SESSION['email']);
$sql_select->execute();

if($sql_select->rowCount() > 0) {
    $dados = $sql_select->fetch();
}     

$sql_select_img = $conexao->prepare("SELECT url_da_imagem_do_perfil, url_da_imagem_do_banner FROM usuario WHERE email = :email");
$sql_select_img->bindValue(':email', $_SESSION['email']);
$sql_select_img->execute();
$imagem = $sql_select_img->fetch();

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Perfil</title>
        <link rel="stylesheet" href="../Assets/style-CSS/style_perfil.css">
    </head>
    <body>
        <?php
            require_once("config_perfil.php"); 
        ?>
        <header>
            <div id="banner_perfil_foto">
                <div id="imagem_banner"> 
                    <?php if (!empty($imagem['url_da_imagem_do_banner'])): ?>
                        <img src="../<?php echo $imagem['url_da_imagem_do_banner']; ?>" alt="Foto de banner atual">
                    <?php endif; ?>
                </div>
                <div id="imagem_perfil"> 
                    <?php if (!empty($imagem['url_da_imagem_do_perfil'])): ?>
                        <img src="../<?php echo $imagem['url_da_imagem_do_perfil']; ?>" alt="Foto de perfil atual">
                    <?php endif; ?>
                </div>
            </div>
                <div id="edit_perfil"> <a href="alterar_perfil.php">Editar perfil</a></div>
                <div id="desc_perfil"> <p><?php echo $dados['descricao'];?></p></div>
                <div id="nome_perfil"> <p><?php echo $dados['nome'];?></p></div>
                <div id="user"> <p>@<?php echo $dados['nome_de_usuario'];?></p></div>
        </header>

        <!-- postagens -->
        <section>
            <div></div>
        </section>

        <aside id="barra_lateral">
            <div id="titulo">
                <p>
                    MÜRAL
                </p>
            </div>
            <div class="botao_barra_lateral">
                <p>
                    <a href="../home_page.php" class="botao_barra_lateral_A"><img src="../Assets/imagens/casa.png" alt=""></a>
                </p>        
            </div>
            <div class="botao_barra_lateral">
                <p>
                    <a href="../Search/index.php" class="botao_barra_lateral_A"><img src="../Assets/imagens/search.png" alt=""></a>
                </p>        
            </div>
            <div class="botao_barra_lateral">
                <p>
                    <a href="../Mensagem/index.php" class="botao_barra_lateral_A"><img src="../Assets/imagens/mensagem.png" alt=""></a>
                </p>        
            </div>
            <div class="botao_barra_lateral">
                <p>
                    <a href="../Notificacao/index.php" class="botao_barra_lateral_A"><img src="../Assets/imagens/sino_notificacao.png" alt=""></a>
                </p>        
            </div>
            <div class="botao_barra_lateral">
                <p>
                    <a href="../Perfil/index.php" class="botao_barra_lateral_A"><img src="../Assets/imagens/perfil.png" alt=""></a>
                </p>        
            </div>
            
            <div id="sair_A">
                <a href="../logout.php">Sair</a>       
            </div>
            <div id="florzinha">
                <img src="../Assets/imagens/flor.png" alt="">
            </div>
        </aside>

        <aside id="outra_barra_lateral">
            <div id="mural_links">
                <a href="../Mural/index.php">Müral</a>
            </div>
            <div id="pasta_links">
                <a href="../Pastas/index.php">Pastas</a>
            </div>
            
            <div id="botao_criar_postagem">
                <img src="../Assets/imagens/botao_criar.png" alt="">
                <a href="../Postagem/index.php">Criar</a>
            </div>
        </aside>

    </body>
</html>