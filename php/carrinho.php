<!DOCTYPE html> 
<html>
<head> 
    <meta charset="UTF-8" />
    <title>Carrinho de Compras - FamintOs</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--CSS-->
    <link rel="stylesheet" href="../css/cardapio.css">
    <link rel="stylesheet" href="style-carrinho.css" /> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <!--ICON-->
    <link rel="icon" href="../estetica_imgs/favicon.ico"> 
</head> 
<body>  

<?php 
    session_start();

    if(empty($_SESSION['ID'])){ //verificando se o usuário está logado

        header('location:login.php');
    }

        include 'conexao.php';
        include 'header.php';

        if (!empty($_GET['cd'])) {

            $cd_prod=$_GET['cd'];
            
            if (!isset($_SESSION['carrinho'])) {
            
            $_SESSION['carrinho'] = array();
            }
            
            
            if (!isset($_SESSION['carrinho'][$cd_prod])) {
            $_SESSION['carrinho'] [$cd_prod]=1; 
            header('location:carrinho.php');
            }
            else {
            $_SESSION['carrinho'] [$cd_prod]+=1; //adiciona um item ao carrinho
            header('location:carrinho.php');
            }
            include 'mostraCarrinho.php';
            
            } else {
            include 'mostraCarrinho.php';
            }
?> 

        <!-- exibindo o valor da variavel total da compra -->
<div class=" text-center" style="margin-top: 15px; color:red;">
	<h1>Total: R$ <?php echo number_format($total,2,',','.'); ?> </h1>
</div>

<div class=" text-center"> 
    <a href="cardapio.php" style="text-decoration:none; color:red;">          
        <button class="btn" >
            <span> Acrescentar Item!</span>
        </button>
    </a>
    </div> 

    <br> 

    <div class=" text-center"> 
        <?php if (count($_SESSION['carrinho']) > 0) { ?>
        <a href="finalizarCompra.php" style="text-decoration:none; color:red;">          
        <button class="btn" >
            <span> Finalizar Compra!</span>
        </button>
        </a>
        <?php } ?>
    
    </div>

    <?php include "footer.php"; ?>
    
</body>
</html>
