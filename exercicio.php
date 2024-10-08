<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <link rel="icon" type="image/x-icon" href="images/LogoQuestionPlex.png">
    <title>Mas é ou num é?</title>
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
                    <li><button id="toggleTheme">Trocar Tema</button></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="main-content">
        <h1>João dividindo uvas</h1>
        <p>João tinha <b>x</b> uvas de um cacho. Ele deu metade das suas uvas para sua amiga Maria e, em seguida, comeu 4 uvas. Agora, João tem 6 uvas.<br><br>
        Quantas uvas João tinha incialmente?</p>
        <br><br>
        <form>
            <input type="radio" id="alternativa1" name="alternativa" value="1" required>
            <label for="alternativa1">12</label><br>

            <input type="radio" id="alternativa2" name="alternativa" value="2" required>
            <label for="alternativa2">14</label><br>

            <input type="radio" id="alternativa3" name="alternativa" value="3" required>
            <label for="alternativa3">18</label><br>

            <input type="radio" id="alternativa4" name="alternativa" value="4" required>
            <label for="alternativa4">20</label><br><br>

            <button type="submit" class="enviar" style="background: green; color: white;">Enviar resposta</button>
        </form>
    </div>

    <script src="scripts/script.js"></script>
</body>

</html>