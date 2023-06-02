<!doctype html>

<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>Minhas Compras - FamintOs</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--CSS-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/cardapio.css">

	<!--ICON-->
	<link rel="icon" href="../estetica_imgs/favicon.ico">
	
</head>

<body>	

<style>
    .itenes {
        margin-bottom: 30px;
    }

	.rodape{
		bottom: 0;
		width: 100%;
		height: 18vh;
	}
</style>
	
	<?php
	
	session_start();

		if(empty($_SESSION['ID'])) {
			header("location:login.php");
		}

		include 'conexao.php';	
		include 'header.php';
		
		$cd_Usuario = $_SESSION['ID'];

		$consultaVenda = $cn->query("select * from vw_venda where cd_cliente = '$cd_Usuario'");
	
	?>
	
<div class="container-fluid">

	<div class="row" style="margin-top: 15px;">
		<h1 class="text-center">
			Minhas Compras
		</h1>
	</div>

	<div class="row">
		<h3 class="text-center">
		Conectado como <i><?php echo $exibe_usuario['nm_usuario']; ?></i>
		</h3>
	</div>
	
	<div class="row" style="margin-top: 15px;">
		
		<div class="col-sm-1 col-sm-offset-1"><h4> Data </h4></div>
		<div class="col-sm-2"><h4> Ticket </h4></div>
		<div class="col-sm-5"><h4> Produto </h4></div>
		<div class="col-sm-1"><h4> Quantidade </h4></div>
		<div class="col-sm-2"><h4> Preço </h4></div>
				
	</div>		

    <div class="itenes">
    <?php while ($exibeVenda = $consultaVenda->fetch(PDO::FETCH_ASSOC)){ ?>
    <div class="row" style="margin-top: 15px;">
		
		<div class="col-sm-1 col-sm-offset-1"> <?php echo date('d/m/Y' ,strtotime ($exibeVenda['dt_venda']));?></div>
		<div class="col-sm-2"> <strong><?php echo $exibeVenda['no_ticket'];?></strong> </div>
		<div class="col-sm-5"> <?php echo $exibeVenda['nm_comida'];?> </div>
		<div class="col-sm-1"> <?php echo $exibeVenda['qt_comida'];?> </div>
		<div class="col-sm-2"> <?php echo number_format($exibeVenda['vl_total_item'],2,',','.');?> </div>
				
	</div>		
	<?php } ?>
    </div>
	
	
</div>

<?php include 'footer.php'; ?>
	
</body>
</html>