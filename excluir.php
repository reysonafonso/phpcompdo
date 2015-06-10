<?php

if($aluno->deletar($_REQUEST['id']))
    echo header("location:index.php?page=listar");
else
    echo "Ocorreu um erro ao excluir o aluno";