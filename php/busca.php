<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio Inteligente</title>
    
    <link rel="stylesheet" href="../css/cardapio.css">
    <link rel="shortcut icon" href="../imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<?php
        session_start();

        include 'conexao.php';	
        include 'header.php';

        $pesquisa = $_GET['txtBuscar'];
        $consulta = $cn->query("select * from tbl_comidas where nm_comida like concat ('%','$pesquisa','%')");
?>

<h1 id="titulo-cardapio">Cardápio inteligente</h1>
    <main id="cabecalho-cardapio">
        <nav id="secao-alimentos">
            <li id="secao-lanches"><a class="link-sessao" href="categoria.php?cat=lanches">Lanches</a></li> 
            <li id="secao-bebidas"><a class="link-sessao" href="categoria.php?cat=bebidas">Bebidas</a></li>
            <li id="secao-sobremesas"><a class="link-sessao" href="categoria.php?cat=sobremesas">Sobremesas</a></li>
            <li id="secao-sorveteria"><a class="link-sessao" href="categoria.php?cat=sorveteria">Sorveteria</a></li>
            <li id="secao-aperitivos"><a class="link-sessao" href="categoria.php?cat=aperitivos">Aperitivos</a></li>
                <form method="get" action="busca.php" id="divBusca">
                    <input type="text" id="txtBusca" placeholder="Buscar..." name="txtBuscar"/>
                    <button type="submit" id="btnBusca">Buscar</button>
                </form>
        </nav>
    </main>

    <div class="container-fluid">
        <div class="row">
        <?php while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
            <div class="col-sm-3">
                <img src="../produtos_img/<?php echo $exibe['img_comida']?>.jpg" class="img-responsive" style="width:70%; height:65%">
                <div><h4><?php echo $exibe['nm_comida']?></h1></div>
                <div><h5>R$ <?php echo number_format($exibe['vl_preco'],2,',','.'); ?></h5></div>

                <a href="../carrinho.php?cd=<?php echo $exibe['cd_comida'];?>">
                        <?php if ($exibe['qt_estoque'] > 0) { ?> 
                        <button class="btn" >
                            <span>Comprar</span>
                        </button>
                        <?php } else { ?>

                        <button class="btn" >
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