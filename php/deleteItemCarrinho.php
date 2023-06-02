<!DOCTYPE html> 
<html>
<head> 
    <meta charset="UTF-8" />
    <title>Carrinho de Compras - FamintOs</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--CSS-->
    <link rel="stylesheet" href="../css/cardapio.css">
    <link rel="stylesheet" href="../style-carrinho.css" /> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <!--ICON-->
    <link rel="icon" href="../estetica_imgs/favicon.ico"> 
</head> 
<body>  

<?php 
    session_start();

    if(empty($_SESSION['ID'])){

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
            $_SESSION['carrinho'] [$cd_prod]-=1;
            header('location:carrinho.php');
            }
            include 'mostraCarrinho.php';
            
            } else {
            include 'mostraCarrinho.php';
            }
?> 

        <!-- exibindo o valor da variavel total da compra -->
<div class="row text-center" style="margin-top: 15px; color:red;">
	<h1>Total R$ <?php echo number_format($total,2,',','.'); ?> </h1>
</div>

<div class="tabela--m01">  
        <font size="3" face="Verdana, Tahoma, sans-serif"> <span style="color:#dc0a1b;"> 
            <table border="1" bgcolor="#ffffdd" bordercolor="#dc0a1b" align="center" height="40" width="170">
                <thead> <!--ABRINDO THREAD-->
            <tr> 
                <td><a href="cardapio.php" style="text-decoration:none; color:red;">Acrescentar Item!</a>
            </tr> 
        <br>
    </div>
    
    <br> 

    <div class="tabela--m03"> 
        <font size="3" face="Verdana, Tahoma, sans-serif"> <span style="color:#dc0a1b;"> 
            <table border="1" bgcolor="#ffffdd" bordercolor="#dc0a1b" align="center" height="40" width="170">
                <thead>
            <tr> 
                <td><a href="finalizarCompra.php" style="text-decoration:none; color:red;">Finalizar Compra!</a>
            </tr> 
        <br>
                </thead> <!--FECHANDO THREAD-->
        </table>
        </div>
</body>
</html>
