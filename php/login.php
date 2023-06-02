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
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
			<div class="col-sm-4 col-sm-offset-4">

				<form name="frmusuario" method="post" action="validausuario.php">  <!--Abrindo formulário-->
					<h2>Login de Usuário</h2>
					
					<div class="form-group">
						<label for="email">Email</label>
						<input name="email_login" type="email" class="form-control" required="required" placeholder="maria@gmail.com">
					</div>
					
					<div class="form-group">
						<label for="senha">Senha</label>
						<input name="senha_login" id="senha" type="password" class="form-control" required="required" placeholder="1234">
						<button type="button" onclick="mostrarSenha()"><span class="glyphicon glyphicon-eye-open"></span></button>
					</div>
							
					<button type="submit" class="btn btn-lg btn-default">
						<span class="glyphicon glyphicon-ok"> Entrar</span>
					</button>
					</form> <!--Fechando formulário-->

					<button type="submit" class="btn btn-lg btn-link">
						<a href="formulario.php">
							Ainda não sou cadastrado
						</a>
					</button>

			</div>
		</div>
	</div>

	<script>
		function mostrarSenha(){
			var tipo = document.getElementById("senha");
			if(tipo.type == "password"){
				tipo.type = "text";
			} else {
				tipo.type = "password";
			}
		}
	</script>
	
	<?php include 'footer.php' ?>


	</body>
	</html>
	
	