
<table border = 1>
    <tr>
        <th>Usuário</th>
        <th>Mostrar Detalhes</th>
        <th colspan="2">Ações</th>
    </tr>
<?php

    foreach ($usuario->listar() as $u) {
        echo "<tr><td>{$u['usuario']}</td>";
        echo "<td><a href=index.php?page=detalhes_usuario&idu=".$u['id'].">Detalhes</a></td>";
        echo "<td><a href=index.php?page=alterar_usuario&idu=".$u['id'].">Alterar</a></td>";
        echo "<td><a href=index.php?page=excluir_usuario&idu=".$u['id'].">Excluir</a></td>";
    }

?>
</table>