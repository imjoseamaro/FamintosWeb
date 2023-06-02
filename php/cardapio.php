<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio Inteligente - FamintOs</title>

    <!--CSS-->
    <link rel="stylesheet" href="../css/cardapio.css">
    <link rel="stylesheet" href="../css/cabecalhocardapio.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <!--ICON-->
    <link rel="icon" href="../estetica_imgs/favicon.ico">    
</head>
<body>

<?php 
        session_start();
        include 'conexao.php';
        include 'header.php';

        $consulta = $cn->query('select cd_comida, nm_comida, vl_preco, img_comida, qt_estoque from tbl_comidas;');
?> 

<style>
    @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@500&display=swap');

    h4,h5{
        font-family: 'Manrope', sans-serif;
    }
</style>

<main id="bloco-principal">
    <h1 id="titulo-cardapio">Cardápio inteligente</h1>

    <nav id="links-secoes">
        <li class="secao">
            <a class="linkimg" href="categorias.php?cat=lanches" style="text-decoration:none;color:red;"><img class="icones-secao" src="../estetica_imgs/lanches.png">Lanches</a>
        </li>
        <li class="secao">
            <a class="linkimg" href="categorias.php?cat=bebidas" style="text-decoration:none;color:red;"><img class="icones-secao" src="../estetica_imgs/bebidas.png">Bebidas</a>
        </li>
        <li class="secao">
            <a class="linkimg" href="categorias.php?cat=sobremesas" style="text-decoration:none;color:red;"><img class="icones-secao" src="../estetica_imgs/sobremesas.png">Sobremesas</a>
        </li>
        <li class="secao">
            <a class="linkimg" href="categorias.php?cat=sorveteria" style="text-decoration:none;color:red;"><img class="icones-secao" src="../estetica_imgs/sorveteria.png">Sorveteria</a>
        </li>
        <li class="secao">
            <a class="linkimg" href="categorias.php?cat=aperitivos" style="text-decoration:none;color:red;"><img class="icones-secao" src="../estetica_imgs/aperitivos.png">Aperitivos</a>
        </li>
    </nav>
    </main>


    <div class="container-fluid">
        <div class="row">
        <?php while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
            <div class="col-sm-3">
                <img src="../produtos_img/<?php echo $exibe['img_comida']?>.jpg" class="img-responsive" style="width:70%; height:65%">
                <div><h4><?php echo mb_strimwidth($exibe['nm_comida'],0,30,'...');?></h1></div>
                <div><h5>R$ <?php echo number_format($exibe['vl_preco'],2,',','.'); ?></h5></div>

                <a href="carrinho.php?cd=<?php echo $exibe['cd_comida'];?>">
                        <?php if ($exibe['qt_estoque'] > 0) { ?> 
                        <button class="btn" >
                        <span class="glyphicon glyphicon-shopping-cart"> Comprar</span>
                        </button>
                        <?php } else { ?>

                        <button class="btn" disabled >
                            <span>Indísponivel</span>
                        </button>
                        <?php }  ?>
                    </a>
            </div>
        <?php } ?>
        </div>
    </div>

    <?php 
    include 'footer.php';
?> 
        
</body>
</html>