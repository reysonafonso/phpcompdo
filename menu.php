<div id="barra">
                <div id="menu-horizontal">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="index.php?page=listar">Listar Alunos</a></li>
                        <?php if(isset($_SESSION['logado'])):?>
                        <li><a href="index.php?page=inserir">Cadastrar Alunos</a></li>
                        <li><a href="index.php?page=inserir_usuarios">Cadastrar Usuarios</a></li>
                        <li><a href="index.php?page=listar_usuarios">Listar Usuarios</a></li>
                        <?php endif;?>
                        <li><a href="index.php?page=login">Login</a></li>
                        <li><a href="index.php?page=logout">Logout</a></li>

                    </ul>
                </div>
            </div>