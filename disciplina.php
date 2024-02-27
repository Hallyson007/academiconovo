<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Acadêmico</title>
    <link rel="stylesheet" href="css/principal.css">
    <script type="text/javascript" src="script/codigo.js"></script>
</head>

<body id="disciplina">
    <a href="index.php">Início</a>
    <h1>Disciplinas</h1>
    <table>
        <tr>
            <th>Disciplina</th>
            <th>Professor(a)</th>
        </tr>
        <tr>
            <td>Programação Web</td>
            <td>David Tahim (!!O Melhor!!)</td>
        </tr>
        <tr>
            <td>Matemática</td>
        </tr>
        <tr>
            <td>Português</td>
        </tr>
       <!-- <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr> -->
    </table>
    <button onclick="toggleDarkMode()">Claro ou Escuro</button>
    <script>
        function toggleDarkMode() {
            var element = document.body;
            element.classList.toggle("dark-mode");
        }
    </script>


</body>

</html>