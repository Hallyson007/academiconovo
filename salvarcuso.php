<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro de curso</title>
</head>

<body>
<?php
$nome = $_POST['aluno'];
$curso = $_POST['curso'];

echo '<h2>Confira os dados:</h2>';
echo '<p>Nome do aluno: ' . $nome . '</p>';

switch ($curso) {
    case 'm':
        echo "Curso: Manutenção de Computadores";
        break;

    case 'r':
        echo "Curso: Redes de Computadores";
        break;

    case 'p':
        echo "Curso: Programador";
        break;

    case 'w':
        echo "Curso: Programação Web";
        break;

    default:
        echo "Escolha um curso válido.";
        break;
}

// $grupo = array("Alvaro", "Kely", "Rodrigo", "Leticia");
// $i = 0;
// while ($i < count($grupo)) {
//     $aluno = $grupo[$i];
//     echo '<br>' . $aluno;
//     $i++;
// }
// $grupo = array("Alvaro", "Kely", "Rodrigo", "Leticia");
// $i = 0;
// do {
// while ($i < count($grupo)) 
//     $aluno = $grupo[$i];
//     echo '<br>' . $aluno;
//     $i++;
// }
 $grupo = array("Alvaro", "Kely", "Rodrigo", "Leticia");
 $i = 0;
 for ($i=0; $i < count($grupo); $i++) { 
         $aluno = $grupo[$i];
    
     echo $aluno.'<br>';

 }
$diciplinas = array("redes de computadores","algoritmos","manutencao de computadores" );
foreach ($diciplinas as $materias ) {
    echo $materias. '<br>';
}
?>



</body>

</html>