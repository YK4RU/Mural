<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/style-CSS/style_cadastro.css">
    <title>Criar conta</title>
</head>
<body>
    <h1 id="titulo_mural">MÜRAL</h1>
    <div id="formulario">
        <form action="" method="POST">
            <p id="titulo_formulario">
                SEJA BEM VINDO(A) !!!
            </p>
            <?php require_once ("config_cadastro.php");?>
            <p>
                <label for="email"> email:</label>
            </p>
            <p>
                <input type="email" class="input" id="email" name="email" require>
            </p>
            <p>
                <label for="email"> nome de usuário:</label>
            </p>
            <p>     
                <input type="text" class="input" id="nome_de_usuario" name="nome_de_usuario" require>
            </p>
            <p>
                <label for="senha">senha:</label>
            </p>
            <p>
                <input type="password"  class="input"  id="senha" name="senha" require>
            </p>
            <p>
                <input type="submit" value="Criar" id="botao_criar">
            </p>
            <p id="ou_paragrafo">
                        Ou
            </p>
                    
            <div id="botao_google">
                <img src="../Assets/imagens/google_logo.png" alt="google_logo" id="google_logo">
                <a href="google.com">Continuar com o Google</a>
            </div>
                    
            <p id="termos_e_politica_texto">
                Ao continuar, você concorda com nossos termos de serviço e confirma que leu nossa politica de privacidade.
            </p>
                    
            <div id="criar_conta_paragrafo">
                <p>
                    Já tem uma conta? 
                </p>
                <a href="../index.php">Entrar</a>           
            </div>
        </form>
        <div>
            <div id="karuy">
                <img src="../Assets/imagens/karu_Y.png" alt="">
            </div>
            <div id="mao">
                <img src="../Assets/imagens/maozinha.png" alt="">
            </div>
        </div>
    </div>
    <div>
        <div id="chapeu">
            <img src="../Assets/imagens/chapeu.png" alt="">
        </div>
        <div id="balao">
            <img src="../Assets/imagens/balão_coração.png" alt="">
        </div>
        <div id="solzin">
            <img src="../Assets/imagens/solzin.png" alt="">
        </div>
    </div>
</body>
</html>