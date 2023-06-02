<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="logincss/login.css">
    <title>tela de login</title>
    <link rel="stylesheet" href="cardapio.css">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<style>
  .container{
    position:relative;
  }
</style>

<?php 
        session_start();
        include 'conexao.php';
        include 'header.php';

        $consulta = $cn->query('select cd_comida, nm_comida, vl_preco, img_comida, qt_estoque from tbl_comidas;');

?> 

    <div class="container" >
        <a class="links" id="paracadastro"></a>
        <a class="links" id="paralogin"></a>
        
        <div class="content">      
          <!--FORMULÁRIO DE LOGIN-->
          <div id="login">
            <form name="frmusuario" method="post" action="validausuario.php"> 
              <h1>Login</h1> 
              <p> 
                <label for="email_login">Seu e-mail</label>
                <input id="email_login" name="email_login" required="required" type="text" placeholder="maria@gmail.com"/>
              </p>
              
              <p> 
                <label for="senha_login">Sua senha</label>
                <input id="senha_login" name="senha_login" required="required" type="password" placeholder="1234" /> 
              </p>
                 
              <p> 
                <input type="submit" value="Logar" /> 
              </p>
              
              <p class="link">
                Ainda não tem conta?
                <a href="#paracadastro">Cadastre-se</a>
              </p>
            </form>
          </div>
    
          <!--FORMULÁRIO DE CADASTRO-->
          <div id="cadastro">
            <form method="post" action="inserirusuario.php" name="logon"> 
              <h1>Cadastro</h1> 
              
              <p> 
                <label for="nome_cad">Seu nome</label>
                <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="Maria" />
              </p>
              
              <p> 
                <label for="email_cad">Seu e-mail</label>
                <input id="email_cad" name="email_cad" required="required" type="email" placeholder="maria@gmail.com"/> 
              </p>
              
              <p> 
                <label for="senha_cad">Sua senha</label>
                <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="1234"/>
              </p>
              
              <p> 
                <input type="submit" value="Cadastrar"/> 
              </p>
              
              <p class="link">  
                Já tem conta?
                <a href="#paralogin"> Ir para Login </a>
              </p>
            </form>
          </div>
        </div>
      </div> 

<?php 
  include 'footer.php';
?> 

</body>
</html>