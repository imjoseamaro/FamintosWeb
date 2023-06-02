<div class="text-center"> 
    <h2 style="color: #dc0a1b;"><span class="glyphicon glyphicon-shopping-cart"> Minha Comanda</span></h2>
</div>

    <?php
	
	$total = null; // variavel total que recebe valor nulo

	if (!isset($_SESSION['carrinho'])){
		$_SESSION['carrinho'] = array();
	}

    // criando um loop para sessão carrinho recebe o $cd e a quantidade
    foreach ($_SESSION['carrinho'] as $cd => $qnt)  {
    $consulta = $cn->query("SELECT * FROM tbl_comidas WHERE cd_comida='$cd'");
    $exibe = $consulta->fetch(PDO::FETCH_ASSOC);

    $comida = $exibe['nm_comida'];  // variável que recebe a comida
    $preco = number_format(($exibe['vl_preco']),2,',','.'); // variável que recebe o preço
    $total += $exibe['vl_preco'] * $qnt; // variável que recebe preço * quantidade
	
	?>

<div class="container">
<div class="row" style="margin-top: 40px;">
		
	<div class="col-sm-1 col-sm-offset-1">
		
	</div>
		
	<div class="col-sm-4">
		<h4 style="padding-top:20px"><?php echo $comida; ?></h4>
	</div>	
		
	<div class="col-sm-2">
		<h4 style="padding-top:20px">R$ <?php echo $preco; ?></h4>
	</div>		

	<div class="col-sm-2" style="padding-top:20px">
		<h4><?php echo $qnt; ?>
		
		<a href="carrinho.php?cd=<?php echo $exibe['cd_comida'];?>"  style="text-decoration:none;color:inherit;">
            <button class="btn" >
                <span class="glyphicon glyphicon-plus"></span>
            </button>

			<a href="deleteItemCarrinho.php?cd=<?php echo $exibe['cd_comida'];?>"  style="text-decoration:none;color:inherit;">
            <button class="btn" >
                <span class="glyphicon glyphicon-minus"></span>
            </button>
		</h4>
	</div>
		
	<div class="col-sm-1 col-xs-offset-right-1" style="padding-top:20px">
		
		<!--remove o item do carrinho pelo id -->
		<a href="removeCarrinho.php?cd=<?php echo $cd;?>">	
			<button class="btn btn-lg btn-block btn-danger">
				<span class="glyphicon glyphicon-remove"></span>		
			</button>
		</a>
    
            </div>
	</div> 		
	</div>	
	<?php } ?>