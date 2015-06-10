<?php
    if(!isset($_REQUEST['submit'])) {
        ?>
        <form action="index.php?page=inserir" method="post">
            <p></p>Nome:<input type="text" name="nome">
            Nota:<input type="text" name="nota"></p>
            <p></p>Email:<input type="text" name="email"></p>
            <input type="submit" value="Cadastrar" name="submit">
        </form>
    <?php
    } else {
        $aluno ->setNome($_REQUEST['nome'])
            ->setNota($_REQUEST['nota'])
            ->setEmail($_REQUEST['email']);

        if($aluno->inserir())
            header("location:index.php?page=listar");
        else
            echo "Ocorreu um erro ao cadastrar o aluno";
    }


