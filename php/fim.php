<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Minha Loja</title>
	
<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--CSS-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/cardapio.css">

	<!--ICON-->
	<link rel="icon" href="../estetica_imgs/favicon.ico">
	
	
<style>
	.rodape{
		bottom: 0;
        position: fixed;
		width: 100%;
	}
</style>
	
	
</head>

<body>
	
<?php
	
	include 'conexao.php';	
	include 'header.php';
	
	?>
	
	
	<div class="container-fluid">
	
		<div class="row">
		
			<div class="col-sm-4 col-sm-offset-4 text-center">
				
                <h1>Compra realizada com sucesso!</h1>
				<h2>Seu número de registro é: <?php echo $ticket; ?></h2>				
							
			</div>
		</div>
	</div>
	
	<?php include 'footer.php' ?>
	
	
	
	
</body>
</html>