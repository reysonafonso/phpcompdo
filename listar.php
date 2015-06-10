
<table border = 1>
    <tr>
        <th>Nome</th>
        <th colspan="3">Ações</th>
    </tr>
<?php

    foreach ($aluno->listar() as $a) {
        echo "<tr><td>{$a['nome']}</td>";
        echo "<td><a href=index.php?page=detalhes&id=".$a['id'].">Detalhes</a></td>";
        echo "<td><a href=index.php?page=alterar&id=".$a['id'].">Alterar</a></td>";
        echo "<td><a href=index.php?page=excluir&id=".$a['id'].">Excluir</a></td>";
    }

?>
</table>