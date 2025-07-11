<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mural</title>
        <link rel="stylesheet" href="Assets/style-CSS/style_login.css">
    </head>
    <body>
        <header>
            <div id="cabecalho">
                <div id="titulo_mural">
                    <p>
                        MÜRAL
                    </p>
                </div>
                
                <div id="botoes_cabecalho">
                    <div id="botao_entrar_sem_conta">
                        <a href="">Entrar sem conta</a>
                    </div>
                    <div id="botao_branco">
                        <a href="Cadastro">Criar</a>
                    </div>
                </div>
            </div>
        </header>
        <section>
            <div id="titulo">
                <p>
                    Explore a criatividade !!!
                </p>
            </div>
            
            <div id="container_imagem">
                
                <div class="imagem">
                    <img src="Assets/imagens/lâmpada.png" alt="lampada" id="lampada">
                </div>
                <div class="imagem">
                    <img src="Assets/imagens/Ykaru.png" alt="menino" id="boneco">
                </div>
                
            </div>
        </section>
        <section>
            <div id="formulario">
                <form action="" method="POST">
                    <p id="titulo_formulario">
                        BEM VINDO(A) DE VOLTA !!!
                    </p>
                    <?php include_once ("config.php");?>
                    <p>
                        <label for="email">Email:</label>     
                        <input type="email" class="input" id="email" name="email" require>
                    </p>
                    <p>
                        <label for="senha">Senha:</label>
                        <input type="password" class="input"  id="senha" name="senha" require>
                    </p>
                    <p>
                        <input type="submit" value="Entrar" id="botao_entrar">
                    </p>
                    
                    <p id="ou_paragrafo">
                        Ou
                    </p>
                    
                    <div id="botao_google">
                        <img src="Assets/imagens/google_logo.png" alt="google_logo" id="google_logo">
                        <a href="google.com">Continuar com o Google</a>
                    </div>
                    
                    <p id="termos_e_politica_texto">
                        Ao continuar, você concorda com nossos termos de serviço e confirma que leu nossa politica de privacidade.
                    </p>
                    
                    <div id="criar_conta_paragrafo">
                        <p>
                            Não tem uma conta? 
                        </p>
                        <a href="Cadastro">Criar</a>           
                    </div>
                </form>
                
            </div>       
        </section>
        
    </body>
</html>