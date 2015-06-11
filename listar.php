
<table border = 1>
    <tr>
        <th>Nome</th>
        <th>Mostrar Detalhes</th>
        <?php if (isset($_SESSION['logado'])):?>
        <th colspan="2">Ações</th>
        <?php endif;?>

    </tr>
<?php

    foreach ($aluno->listar() as $a) {
        echo "<tr><td>{$a['nome']}</td>";
        echo "<td><a href=index.php?page=detalhes&ida=".$a['id'].">Detalhes</a></td>";
        if(isset($_SESSION['logado'])){
            echo "<td><a href=index.php?page=alterar&ida=".$a['id'].">Alterar</a></td>";
            echo "<td><a href=index.php?page=excluir&ida=".$a['id'].">Excluir</a></td>";
        }

    }

?>
</table>