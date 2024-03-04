<?php

// Recebe os valores do formulário
$nome = $_POST ["nome"];
$n1 = $_POST ["n1"];
$n2 = $_POST ["n2"];
$n3 = $_POST ["n3"];
$n4 = $_POST ["n4"];
$datafalta = $_POST ["datafalta"];

// Define a função para calcular a média
function calcularMedia ($n1,$n2,$n3,$n4) {
  return ( $n1+$n2+$n3+$n4 ) / 4;
}

// Calcula a média usando a função
$resultado = calcularMedia ( $n1,$n2,$n3,$n4 );

// Verifica a situação do aluno usando a estrutura condicional
if ($resultado >= 7 && $datafalta<=32) {
  echo ("$nome, você está aprovado com a média $resultado.");
} elseif ($resultado < 7 && $datafalta >32 ) {
  echo ("$nome, você está em recuperação com a média $resultado.");
} elseif ($datafalta>32) {
  echo (" você está em reprovado com a média ".$resultado);
} else {
  echo ("$nome, você está reprovado com a média $resultado.");
}


?>