<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/style-question.css">
    <link rel="icon" type="image/x-icon" href="images/LogoQuestionPlex.png">
    <title>Cadastrar Questão</title>
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
                    <li><a href="index.php">Início</a></li>
                    <li><a href="sobre.php">Sobre</a></li>
                    <li><a href="criarQuestao.php">Criar Questão</a></li>
                    <li><a href="cadastro.php">Cadastrar-se</a></li>
                    <li><button id="toggleTheme">Trocar Tema</button></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="main-content">
        <h1> Criador de questões</h1>
        <?php if (isset($error_message)): ?>
            <p style="color:red;"><?php echo $error_message; ?></p>
        <?php endif; ?>
        <form class="form-criar-questao">
            <div class="input-criar-questao">
                <label for="titulo">Título</label>
                <input type="text" id="titulo" name="titulo" required>
            </div>
            <div class="input-criar-questao">
                <label for="descricao">Informe a questão completa</label>
                <textarea id="descricao" name="descricao" rows="autoResize(this)" placeholder="João tem 3 maçãs..." required></textarea><br>
            </div>
            <div class="input-criar-questao">
                <label for="opcao">Selecione a alternativa correta:</label><br>
                <input type="radio" id="opcao1" name="opcao" value="1" required>
                <label for="opcao1"><textarea for="opcao1" id="opcao1" name="opcao1" rows="autoResize(this)" placeholder="Alternativa 1" required></textarea><br></label><br>

                <input type="radio" id="opcao2" name="opcao" value="2">
                <label for="opcao2"><textarea for="opcao2" id="opcao2" name="opcao2" rows="autoResize(this)" placeholder="Alternativa 2" required></textarea><br></label><br>

                <input type="radio" id="opcao3" name="opcao" value="3">
                <label for="opcao3"><textarea for="opcao3" id="opcao3" name="opcao3" rows="autoResize(this)" placeholder="Alternativa 3" required></textarea><br></label><br>

                <input type="radio" id="opcao4" name="opcao" value="4">
                <label for="opcao4"><textarea for="opcao4" id="opcao4" name="opcao4" rows="autoResize(this)" placeholder="Alternativa 4" required></textarea><br></label><br>
            </div>
            <div class="input-criar-questao">
                <button type="submit" id="cadastrarQuestao" name="cadastrarQuestao" style="background: green; color: white;" required>Cadastrar questão</button>
            </div>
        </form>
    </div>
    
    <script src="scripts/script.js"></script>
</body>

</html>