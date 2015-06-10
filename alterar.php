<?php
    if(!isset($_REQUEST['submit'])) {
        $id = $_REQUEST['id'];
        $alt = $aluno->find($id);?>
        <form action="index.php?page=alterar" method="post">
            <p>Nome:<input type="text" name="nome" value="<?php echo $alt['nome'] ?>">
                Nota:<input type="text" name="nota" value="<?php echo $alt['nota'] ?>"></p>
            <p>Email:<input type="text" name="email" value="<?php echo $alt['email'] ?>"></p>
            <input type="hidden" value="<?php echo $alt['id'] ?>" name="idalt">
            <input type="submit" value="Atualizar" name="submit">
        </form>
    <?php
    }else{
        $aluno->setNome($_REQUEST['nome'])
              ->setEmail($_REQUEST['email'])
              ->setNota($_REQUEST['nota'])
              ->setId($_REQUEST['idalt']);

        if($aluno->alterar())
            header("location:index.php?page=listar");
        else
            echo "Ocorreu um erro ao atualizar o aluno";
    }








