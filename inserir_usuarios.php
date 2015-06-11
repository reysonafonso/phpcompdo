<?php

if(isset($_SESSION['logado'])) {
    if (!isset($_REQUEST['submit'])) {
        ?>
        <form action="index.php?page=inserir_usuarios" method="post">
            <p></p>Nome Usuário:<input type="text" name="nome">
            Email:<input type="text" name="email"></p>
            <p></p>Senha:<input type="password" name="senha"></p>
            <input type="submit" value="Cadastrar" name="submit">
        </form>
    <?php
    } else {
        $usuario ->setNome($_REQUEST['nome'])
                ->setEmail($_REQUEST['email'])
                ->setSenha($_REQUEST['senha']);

        if ($usuario->inserir())
            header("location:index.php?page=listar_usuarios");
        else
            echo "Ocorreu um erro ao cadastrar o usuario";
    }
}else{
    echo "<h1>Você precisa estar logado para acessar essa página</h1>";
}