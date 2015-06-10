<?php
require_once 'classes/Aluno.class.php';
require_once("header.php");
require_once("menu.php");

try {
    $conexao = new \PDO("mysql:host=localhost; dbname=school", "root", "osnofa79");

}catch(\PDOException $e){
    echo "Não foi possível a conexão com o banco de dados: Erro código: ".$e->getCode().": ".$e->getMessage();
}
$aluno = new Aluno($conexao);

?>
    <div id="conteudo">
        <?php
        if(!isset($_GET['page']))
            require_once("home.php");
        else
            require_once($_GET['page'].".php");
        ?>
    </div>
<?php require_once("footer.php"); ?>