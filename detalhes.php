<?php
$resa = $aluno->find($_REQUEST['ida']);
?>

<table border = 1>
    <tr>
        <th>Nome</th>
        <th>Email</th>
        <th>Nota</th>
    </tr>
    <?php
        echo "<tr><td>{$resa['nome']}</td>";
        echo "<td>{$resa['email']}</td>";
        echo "<td>{$resa['nota']}</td></tr>";
    ?>
</table>