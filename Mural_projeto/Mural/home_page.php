<?php
require_once('conexao.php');
require_once('protect.php');

$id = $_SESSION['id_usuario'];

$sql_select_img = $conexao->prepare("SELECT url_da_imagem_do_perfil FROM usuario WHERE id_usuario = :id");
$sql_select_img->bindValue(':id', $id);
$sql_select_img->execute();
 
$imagem = $sql_select_img->fetch();
            
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
            <p id="titulo">
                MÜRAL
            </p>
            <div id="foto_perfil_e_search_box">
                <div id="search_box">
                    <form action="Search/index.php" method="get">
                        <input type="text" placeholder="Pesquisar..." id="search_input">     
                    </form>
                    <img src="Assets/imagens/search.png" alt="" id="search_png">
                </div>
                <div id="foto_perfil">
                    <button><a href="Perfil/index.php" id="perfil_A">
                        <img src="<?php echo $imagem['url_da_imagem_do_perfil']; ?>" alt="Foto de perfil atual">
                    </a></button>            
                </div>
            </div>
        </div>
    </header>
    <aside id="barra_lateral">
        <div class="botao_barra_lateral">
            <p>
                <a href="home_page.php" class="botao_barra_lateral_A"><img src="Assets/imagens/casa.png" alt=""></a>
            </p>        
        </div>
        <div class="botao_barra_lateral">
            <p>
                <a href="Search/index.php" class="botao_barra_lateral_A"><img src="Assets/imagens/search.png" alt=""></a>
            </p>        
        </div>
        <div class="botao_barra_lateral">
            <p>
                <a href="Mensagem/index.php" class="botao_barra_lateral_A"><img src="Assets/imagens/mensagem.png" alt=""></a>
            </p>        
        </div>
        <div class="botao_barra_lateral">
            <p>
                <a href="Notificacao/index.php" class="botao_barra_lateral_A"><img src="Assets/imagens/sino_notificacao.png" alt=""></a>
            </p>        
        </div>
        <div class="botao_barra_lateral">
            <p>
                <a href="Perfil/index.php" class="botao_barra_lateral_A"><img src="Assets/imagens/perfil.png" alt=""></a>
            </p>        
        </div>
        
        <div id="sair_A">
            <a href="logout.php">Sair</a>       
        </div>
        <div id="florzinha">
            <img src="Assets/imagens/flor.png" alt="">
        </div>
    </aside>

    <!-- postagens -->
    <section>
        <?php
        // $post_id = $_SESSION['postagem_id'];
        // $sql_select_post = $conexao->prepare("SELECT postagem.descricao_postagem, postagem.url_da_imagem FROM postagem INNER JOIN usuario ON (postagem.id_usuario = usuario.id_usuario) WHERE postagem_id = :id_post");
        // $sql_select_post->bindValue(':id_post', $post_id);
            // if ($sql_select_post->execute()) {
            //     while ($rs = $sql_select_post->fetch()) {?>
                
            <div id="postagem">
                <?php if (!empty($rs['url_da_imagem'])): ?>
                    <img src="<?php 
                        // echo $rs['url_da_imagem']; 
                        ?>" alt="">
                <?php endif; ?>
                <p><?php 
                // echo $rs['descricao_postagem'];
                ?></p>
            </div>

            <?php
                // }}
            ?>
    </section>
    <!-- /postagens -->

    <section>
            <div id="botao_criar_postagem">
                <button><a href="Postagem" id="botao_criar_postagem_A"><img src="Assets/imagens/botao_criar.png" alt="criar"></a></button>       
            </div>
    </section>
</body>
</html>