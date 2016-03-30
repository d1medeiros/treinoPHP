<?php 
	include "cabecalho.php";
	include "conexao.php";
	include "banco_produto.php";
	include "logica_usuario.php";
?>


<?php if(isset($_SESSION["danger"])){ ?>
	<p class="alert-danger"><?=  $_SESSION["danger"] ?></p>
<?php  } unset($_SESSION["danger"]); ?>

<?php if(isset($_SESSION["success"])){ ?>
	<p class="alert-success"><?=  $_SESSION["success"] ?></p>
<?php  } unset($_SESSION["success"]); ?>

<h2>Login</h2>

<?php if(usuarioEstaLogado()) { ?>
	<p class="alert-success">Logado com sucesso!</p> <a href="deslogar.php">Deslogar</a>
<?php }else{ ?>


<form action="login.php" method="post">
<table class="table">
    <tr>
        <td>Nome</td>
        <td><input class="form-control" type="text" name="nome"></td>
    </tr>
      <tr>
        <td>Email</td>
        <td><input class="form-control" type="email" name="email"></td>
    </tr>
    <tr>
        <td>Senha</td>
        <td><input class="form-control" type="password" name="senha"></td>
    </tr>
    <tr>
        <td><button type="submit" class="btn btn-primary">Login</button></td>
    </tr>
</table>
</form>

<?php } ?>

</div>
</body>
</html>

