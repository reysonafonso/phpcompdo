<?php
if(!isset($_REQUEST['submit'])){ ?>
    <form action="index.php?page=login" method="post">
        <fieldset>
            <legend>Login do Usuário</legend>
            <label for ="usuario">Usuário: <input type="text" name="usuario"></label>
            <label for ="senha">Senha: <input type="password" name="senha"></label>
            <label for ="submit"><input type="submit" name="submit"></label>
        </fieldset>
    </form>
<?php
}else if(isset($_REQUEST['submit'])){
    if($usuario->logar($_REQUEST['usuario'], $_REQUEST['senha'])){
        $_SESSION['logado'] = true;
        header("location:index.php?page=listar");
    } else {
        $_SESSION['logado'] = false;
        header("location:index.php?page=login");
    }
}
?>