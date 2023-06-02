<?php 
    include 'conexao.php';

    session_start();

    $Vemail = $_POST['email_login'];
    $Vsenha = $_POST['senha_login'];

    //echo $Vemail. '<br>';
    //echo $Vsenha. '<br>';

    $consulta = $cn->query("select cd_usuario, nm_usuario, ds_email, ds_senha, ds_status from tbl_usuario 
    where ds_email = '$Vemail' and ds_senha = '$Vsenha'");

    if($consulta->rowCount() == 1){
        $exibeUsuario = $consulta->fetch(PDO::FETCH_ASSOC);

        if($exibeUsuario['ds_status'] == 0){
        $_SESSION['ID'] = $exibeUsuario ['cd_usuario'];
        $_SESSION['Status']=0;
        header('location:index.php');
        }
        else{
            $_SESSION['ID'] = $exibeUsuario ['cd_usuario'];
            $_SESSION['Status']=1;
            header('location:index.php');
        }
    }else{
        header('location:erro.php');
    }
?>