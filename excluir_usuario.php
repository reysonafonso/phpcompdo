<?php

if($usuario->deletar($_REQUEST['idu']))
    echo header("location:index.php?page=listar_usuarios");
else
    echo "Ocorreu um erro ao excluir o aluno";