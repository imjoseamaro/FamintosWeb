<!DOCTYPE html>
<html lang="pt_br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login - FamintOs</title>

	<!--CSS-->
	<link rel="stylesheet" href="../css/cardapio.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!--ICON-->
	<link rel="icon" href="../estetica_imgs/favicon.ico">
</head>

<body>

<style>
	.rodape{
		bottom: 0;
        position: fixed;
		width: 100%;
	}
</style>
	
<?php
	include 'conexao.php';	
    include 'header.php';
?>
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-4 text-center">
		
				<h2>Email já em uso na Loja!!!</h2>
				
				<a href="login.php" class="btn btn-block btn-info" role="button">Tentar Novamente</a>
						
				<button type="button" class="btn btn-lg btn-link">
					<a href="formulario.php">
						Ainda não sou cadastrado
					</a>	
				</button>
			</div>
		</div>
	</div>

<?php 
    include 'footer.php';
?> 	
</body>
</html>