<?php



$conexao = mysqli_connect('host', 'user', 'password','academico');


if (!$conexao) {
    die("Erro ao conectar ao banco de dados: " . mysqli_error($mysqli));
}
echo 'cnexao bem sucedida';

mysqli_close($conexao);
?>
