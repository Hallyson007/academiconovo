<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Acadêmico</title>
    <link rel="stylesheet" href="css/principal.css">
    <script type="text/javascript" src="script/codigo.js"></script>
</head>

<body id="nota">
    <a href="index.php">Início</a>
    <h1>Cadastro das Notas dos Alunos</h1>
     <form onsubmit="event.preventDefault(); calcularMedia();" action="media.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome">
        <label for="serie">Série:</label>
        <input type="text" id="serie" name="serie">
        <label for="turma">Turma:</label>
        <input type="text" id="turma" name="turma">
        <label for="turno">Turno:</label>
        <input type="text" id="turno" name="turno">
        <label for="n1">Nota 1:</label>
        <input type="number" id="n1" name="n1">
        <label for="n2">Nota 2:</label>
        <input type="number" id="n2" name="n2">
        <label for="n3">Nota 3:</label>
        <input type="number" id="n3" name="n3">
        <label for="n4">Nota 4:</label>
        <input type="number" id="n4" name="n4">
        <input type="submit" value="Calcular Média">


        <button type="button" onclick="salvarDados()">Salvar</button>


    </form>
    <button onclick="toggleDarkMode()">Claro ou Escuro</button>
    <div id="mensagem" style="display: none;">
        <button onclick="fecharMensagem()">Fechar</button>
    </div>
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