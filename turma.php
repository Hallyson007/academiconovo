<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Acadêmico</title>
    <link rel="stylesheet" href="css/principal.css">
    <script type="text/javascript" src="script/codigo.js"></script>
</head>

<body id="turma">
    <a href="index.php">Início</a>
    <h1>Cadastro das Turmas</h1>
    <form action="/salvar" method="post">
        <label for="serie">Série:</label><br>
        <input type="text" id="serie" name="serie"><br>
        <label for="turma">Turma:</label><br>
        <input type="text" id="turma" name="turma"><br>
        <label for="turno">Turno:</label><br>
        <input type="text" id="turno" name="turno"><br>
        <input type="submit" value="Salvar">
        <button type="button" onclick="salvarDados()">Salvar</button>
    </form>
    <button onclick="toggleDarkMode()">Claro ou Escuro</button>
    <script>
        function toggleDarkMode() {
            var element = document.body;
            element.classList.toggle("dark-mode");
        }

        function salvarDados() {
            alert("Dados salvos com sucesso!");
        }
    </script>
</body>

</html>