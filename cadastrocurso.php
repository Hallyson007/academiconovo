<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Acadêmico</title>
   <!-- <link rel="stylesheet" href="css/principal.css">
    <script type="text/javascript" src="script/codigo.js"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body[data-bs-theme="dark"] {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <a href="index.php">Início</a>
        <h1 class="mb-4">Cadastro de Cursos</h1>
        <form action="processa_formulario.php" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome do Aluno:</label>
                <input type="text" id="nome" name="aluno" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="matricula" class="form-label">Matrícula:</label>
                <input type="text" id="matricula" name="matricula" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Escolha o curso:</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="curso" value="m" id="cursoManutencao">
                    <label class="form-check-label" for="cursoManutencao">Manutenção de Computadores</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="curso" value="r" id="cursoRedes">
                    <label class="form-check-label" for="cursoRedes">Redes</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="curso" value="p" id="cursoProgramacao">
                    <label class="form-check-label" for="cursoProgramacao">Programação</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="curso" value="w" id="cursoProgramadorWeb">
                    <label class="form-check-label" for="cursoProgramadorWeb">Programador Web</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>

    <div class="container mt-5">
        <!-- Botão para alternar entre temas -->
        <button class="btn btn-primary mb-3" onclick="toggleTheme()">Alternar Tema</button>
        <form action="processa_formulario.php" method="post">
            <!-- Resto do seu formulário aqui... -->
        </form>
    </div>
    <!-- Inclua os scripts do Bootstrap (opcional, pois já estamos usando o bundle no final do body) -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
    <!-- Script para alternar entre temas -->
    <script>
        function toggleTheme() {
            const htmlElement = document.querySelector('html');
            const currentTheme = htmlElement.getAttribute('data-bs-theme');
            const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
            htmlElement.setAttribute('data-bs-theme', newTheme);
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
</body>

</html>