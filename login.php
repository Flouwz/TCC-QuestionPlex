<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel="icon" type="image/x-icon" href="images/LogoQuestionPlex.png">
    <title>Entre no QuestionPlex</title>
</head>

<body>
    <header>
        <div class="container" id="myHeader">
            <div class="logo-title">
                <a href="index.php"><img src="images/LogoQuestionPlex.png" height="50px" width="50px"></a>
                <h1>QuestionPlex</h1>
            </div>
            <nav>
                <ul>
                </ul>
            </nav>
        </div>
    </header>

    <div class="login-form">
        <h2>Login</h2>

        <?php if (isset($error_message)): ?>
            <p style="color:red;"><?php echo $error_message; ?></p>
        <?php endif; ?>

        <form action="#" method="post">
            <div class="input-group">
                <label for="username">Usuário</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="input-group">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-button">Entrar</button>
        </form>
        <div class="cadastrar">
            <a href="cadastro.php" id="cadastrar-link">Cadastro</a>
        </div>
    </div>

    <script src="scripts/script.js"></script>
</body>

</html>