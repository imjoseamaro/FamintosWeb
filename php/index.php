<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - FamintOs</title>
    
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <!--ICON-->
    <link rel="icon" href="../estetica_imgs/favicon.ico">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">
</head>
<body onload="test()">

<?php 
        session_start();
        include 'conexao.php';
        include 'header.php';

        $consulta = $cn->query('select cd_comida, nm_comida, vl_preco, img_comida, qt_estoque from tbl_comidas;');
?> 

    <section id="test">
        <div id="botoes">
            <input id="b1" name='slide' type="radio" value="1" checked>
            <input id="b2" name='slide' type="radio" value="2">
            <input id="b3" name='slide' type="radio" value="3">
        </div>
        <div id="s1" class="inicio">
            <div class="texto">
                <div class="estetica">
                    <img id="logo2" src="../estetica_imgs/famintosf2.png">
                    <p class="parag" id="p1">Se o problema é comida,<br> nós somos a solução!</p>
                </div>
            </div><br>
            <img class="img-banner" id="hamburguer" src="../estetica_imgs/hbg3.jpg">
        </div>
        <div id="s2" class="inicio">
            <div class="texto">
                <div class="estetica">
                    <p class="parag" id="p2">
                        Conheça nosso cardápio inteligente!<br>
                        Experimente começar pelos
                        mais pedidos do site.<br>
                        De Lanches à Sorveteria, aqui tem
                        de tudo para quem está faminto!
                    </p>
                </div>
            </div>
            <img class="img-banner" id="cardapio" src="../estetica_imgs/site.png"><!-- foto do cardapio inteligente -->
        </div>
        <div id="s3" class="inicio">
            <div class="texto">
                <div class="estetica">
                    <p  class="parag" id="p3">Estamos nas redes!</p>
                    <div id="reunir">
                    <figure id="fig1" class="figs">
                        <img id="icone1" src="../estetica_imgs/insta-icon.png" alt="icone instagram">
                        <figcaption class="cap">Nos siga no Instagram!</figcaption>
                    </figure>
                    <figure class="figs">
                        <img id="icone2" src="../estetica_imgs/whats-icon.png" alt="icone whatsapp">
                        <figcaption class="cap">Converse conosco pelo WhatsApp</figcaption>
                    </figure class="figs">
                    <figure class="figs">
                        <img id="icone3" src="../estetica_imgs/tel-icon.png" alt="icone telefone">
                        <figcaption class="cap">Criticas ou elogios!</figcaption>
                    </figure>
                    <figure class="figs">
                        <img id="icone4" src="../estetica_imgs/email-icon.png" alt="icone email">
                        <figcaption class="cap">Dúvidas? Nos envie um email!</figcaption>
                    </figure>
                    </div>
                </div>
            </div>
            <img class="img-banner" id="redes" src="../estetica_imgs/instaedit.png"><!-- divulgação das redes -->
        </div>
    </section>

    <div class="recomendar">
        <div class="organizar" id="peqs">
            <img class="quadro" src="../comidas_imgs/coxinha.jpg"><br>
            <img class="quadro" src="../comidas_imgs/milkshake.jpg">
        </div>
        <div class="organizar" id="comidas">
            <p>Os mais pedidos do FamintOs!</p>
        </div>
        <div class="organizar" id="principal">
            <img id="pizza" src="../comidas_imgs/pizza1.jpg">
        </div>
    </div>
    <?php 
    include 'footer.php';
?> 
    <script src="../js/script.js" ></script>
</body>
</html>