<?php
$resu = $usuario->find($_REQUEST['idu']);
?>

<table border = 1>
    <tr>
        <th>Nome</th>
        <th>Email</th>
    </tr>
    <?php
        echo "<tr><td>{$resu['usuario']}</td>";
        echo "<td>{$resu['email']}</td>";
    ?>
</table>