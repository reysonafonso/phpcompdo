<?php
$res = $aluno->find($_REQUEST['id']);
?>

<table border = 1>
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Nota</th>
    </tr>
    <?php
        echo "<tr><td>{$res['nome']}</td>";
        echo "<td>{$res['email']}</td>";
        echo "<td>{$res['nota']}</td></tr>";
    ?>
</table>