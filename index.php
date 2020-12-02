<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Professional Finder</title>
</head>
<body>

    <div class="navconteiner">
        <nav class="menu">
            <ul>
                <li><a href="">Home</a> </li>
                <li><a href="#contato">Contato</a> </li>
                <li><a href="#info">Info</a> </li>
            </ul>
        </nav>
    </div>
    <div class="mainBox">
        <div class="logo">
            <img src="assets/img/professionalFinder.png" alt="">
        </div>
        <form method="POST" class="loginContainer" action="valida.php">
            <?php
                if (isset($_SESSION['msg'])) {
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                }
                if (isset($_SESSION['msgcad'])) {
                    echo $_SESSION['msgcad'];
                    unset($_SESSION['msgcad']);
                }
            ?>
            <nav class="user">
                Email:&nbsp;&nbsp;&nbsp;
                <input type="text" name="usuario" placeholder="Digite o seu usuário">
            </nav>
            <nav class="password">
                Senha:&nbsp;&nbsp;
                <input type="password" name="senha" placeholder="Digite a sua senha">
            </nav>
            <input type="submit" name="btnLogin" value="Acessar" class="button">
        </form>
    </div>
    <div class="cadastro">
        <section class="cadastroContainer">
            <div class="cadastroBox">
                <a class="teste" href="assets/cadastroautocon.php">
                    <div class="text">
                        <h4> Precisa de um de nossos profissionais?</h4>
                    </div>
                </a>
            </div>
            <div class="cadastroBox1">
                <a class="teste" href="">
                    <div class="text">
                        <h4>Possui Habilidades?</h4>
                    </div>
                </a>
            </div>
        </section>
    </div>
    <section class="infoContainer">
        <article id="info" class="info">
            <h1>Para serviços <br> Como funciona?</h1>
            <span>Conectamos pessoas que precisam de serviços,
                com nossos habilidosos parceiros.<br>
                Podendo escolher o preço mais atrativo como também
                checar quão bem avaliado é o nosso parceiro <br>
                pelos demais usuarios.
            </span>
        </article>
        <img src="https://cdn.pixabay.com/photo/2015/06/29/08/16/system-825314__340.jpg" alt="">
    </section>
    <section class="infoContainer">
        <article id="info" class="info">
            <h1>Para Parceiros <br> Como funciona?</h1>
            <span>Conectamos voce como nossos clientes.<br>
                Voce irá dar seu prazo e preço para
                trabalhos em sua especialidade <br>
                E sera avaliado pelos usuarios, assim como também, vai fazer
                uma avaliação de seu cliente.
            </span>
        </article>
        <img src="https://cdn.pixabay.com/photo/2019/06/06/16/02/technology-4256272__340.jpg" alt="">
    </section>
    <footer>
        <section class="contato" id="contato">
            <div class="email">
                <h1>Email.:</h1>
                <a href="mailto:zipzip@estacio.com">zipzip@estacio.com</a>
            </div>
            <div class="phone">
                <h1>Telefone.:</h1>
                <span>+55 (41) 9999-9999</span>
            </div>
        </section>
        <section class="copyright">
            <span>Desenvolvido pela equipe My hero Academia</span>
        </section>
    </footer>
</body>
</html>