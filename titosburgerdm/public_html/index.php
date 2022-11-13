<?php 
    $nomePagina = "Painel Administrativo"; 
    include_once('includes/head.inc.php');
    include_once('../mvc/validation-cookie.php')
?>

<body>
    <div class="d-flex justify-content-center align-items-center align-self-center login-page">
        <div class="card card-login">
            <div class="card-body">
                <h5 class="card-title text-center">Acesso Restrito</h5>

                <form action="../mvc/validation.php" method="post" class="form-login">
                    <div class="py-2">
                        <input type="text" class="form-control" placeholder="Usuário" name="login-user">
                    </div>
                    <div class="py-2">
                        <input type="password" class="form-control" placeholder="Senha" name="pass-user">
                    </div>
                    <div class="py-2">
                        <ul>
                            <li><a href="../mvc/recovery-pass.php">Recuperar Senha</li>
                        </ul>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-titos" href="dashboard.php">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

0    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>