<?php
    if(!isset($_REQUEST['submit'])) {
        $idu = $_REQUEST['idu'];
        $altu = $usuario->find($idu);?>
        <form action="index.php?page=alterar_usuario" method="post">
            <p>Usuário:<input type="text" name="usuario" value="<?php echo $altu['usuario'] ?>"></p>
            <p>Email:<input type="text" name="email" value="<?php echo $altu['email'] ?>"></p>
            <p>Senha:<input type="password" name="senha" value="<?php echo $altu['senha'] ?>"></p>
            <input type="hidden" value="<?php echo $altu['id'] ?>" name="idaltu">
            <input type="submit" value="Atualizar" name="submit">
        </form>
    <?php
    }else{
        $usuario->setNome($_REQUEST['usuario'])
              ->setEmail($_REQUEST['email'])
              ->setSenha($_REQUEST['senha'])
              ->setId($_REQUEST['idaltu']);

        if($usuario->alterar())
            header("location:index.php?page=listar_usuarios");
        else
            echo "Ocorreu um erro ao atualizar o usuario";
    }








