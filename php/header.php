<header class="cabecalho">
        <a href="index.php"><img id="logo" src="../estetica_imgs/famintosf.png"></a>
        <nav id="links">
            <ul id="lista">
                <li class="item" id="i1"><a class="menu" href="index.php" style="text-decoration:none;color:inherit;"><p>Home</p</a></li>
                <li class="item" id="i2"><a class="menu" href="cardapio.php" style="text-decoration:none;color:inherit;"><p>Cardápio</p></a></li>
                <li class="item" id="i3"><a class="menu" href="carrinho.php?cd=0" style="text-decoration:none;color:inherit;"><p>Carrinho</p></a></li>

                <?php if(empty($_SESSION['ID'])) { ?>
                    <li class="item"><a class="menu" href="login.php" style="text-decoration:none;color:inherit;"><p>Login</p></a></li>
                <?php } else {

                        if($_SESSION['Status'] == 0) {
                            $consulta_usuario = $cn->query("select nm_usuario from tbl_usuario where cd_usuario = '$_SESSION[ID]'");
                            $exibe_usuario = $consulta_usuario->fetch(PDO::FETCH_ASSOC);
                        ?>
                    <li class="item"><a class="menu" href="user.php" style="text-decoration:none;color:inherit;"><p><?php echo mb_strimwidth($exibe_usuario['nm_usuario'],0,20,'...'); ?><p></a></li>
                    <li class="item"><a class="menu" href="sair.php" style="text-decoration:none;color:inherit;"><p>Sair</p></a></li>
                    <?php } else {?>
                        <li class="item"><a class="menu" href="adm.php">Administrador</a></li>
                    <li class="item"><a class="menu" href="sair.php" style="text-decoration:none;color:inherit;"></p>Sair</a></li>
                <?php } }?>
            </ul>
        </nav>
    </header>