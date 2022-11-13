<?php $separaUrl = explode("/", $_SERVER['PHP_SELF']);?>

<aside class="navbar navbar-titos">
        <div class="navbar-logo">
            <a href="#"><img src="assets/img/logo.png" alt="" class="logo"></a>
        </div>
        <hr>
        <nav class="navbar-titos-aside">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link nav-link-titos <?php if($separaUrl[2] == 'dashboard.php') echo 'active' ?> ">
                        <ion-icon name="home-outline"></ion-icon>
                        Dashboard
                    </a>
                </li>

                <li class="nav-item">
                    <a href="cliente.php" class="nav-link nav-link-titos <?php if($separaUrl[2] == 'cliente.php') echo 'active' ?> ">
                        <ion-icon name="people-outline"></ion-icon>
                        Clientes
                    </a>
                </li>

                <li class="nav-item">
                    <a href="fornecedor.php" class="nav-link nav-link-titos <?php if($separaUrl[2] == 'fornecedor.php') echo 'active' ?> ">
                        <ion-icon name="storefront-outline"></ion-icon>
                        Fornecedores
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-link-titos <?php if($separaUrl[2] == 'pedidos.php') echo 'active' ?> ">
                        <ion-icon name="receipt-outline"></ion-icon>
                        Pedidos
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-link-titos <?php if($separaUrl[2] == 'categorias.php') echo 'active' ?> ">
                        <ion-icon name="albums-outline"></ion-icon>
                        Categorias
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-link-titos <?php if($separaUrl[2] == 'produtos.php') echo 'active' ?> ">
                        <ion-icon name="beer-outline"></ion-icon>
                        Produtos
                    </a>
                </li>

                <li class="nav-item">
                    <a href="usuarios.php" class="nav-link nav-link-titos <?php if($separaUrl[2] == 'usuarios.php') echo 'active' ?> ">
                        <ion-icon name="people-outline"></ion-icon>
                        Usuários
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link nav-link-titos <?php if($separaUrl[2] == 'configuracoes.php') echo 'active' ?> ">
                        <ion-icon name="cog-outline"></ion-icon>
                        Configurações
                    </a>
                </li>
                <li class="nav-item">
                    <a href="index.php" class="nav-link nav-link-titos <?php if($separaUrl[2] == 'exit.php') echo 'active' ?> ">
                        <ion-icon name="home-outline"></ion-icon>
                        Sair
                    </a>
                </li>
            </ul>
        </nav>
    </aside>