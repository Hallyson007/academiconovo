// document.write("Data Atual:");
// document.write(Date());
// function funcao1() {
//     alert ("Usando Função");
// }
document.write("Data atual: ");
document.write(Date());

function exibirAlerta() {
  alert("usando funcao");
}

function obterNota(id) {
  var valor = document.getElementById(id).value;
  return valor ? parseFloat(valor) : 0;
}

function calcularMedia() {
  var nota1 = obterNota("n1");
  var nota2 = obterNota("n2");
  var nota3 = obterNota("n3");
  var nota4 = obterNota("n4");

  // Verifique se todos os campos estão vazios
  if (nota1 === 0 && nota2 === 0 && nota3 === 0 && nota4 === 0) {
    alert("Por favor, digite pelo menos uma nota.");
    return;
  }

  // Verifique se alguma nota é maior que 10
  if (nota1 > 10 || nota2 > 10 || nota3 > 10 || nota4 > 10) {
    alert("Por favor, insira notas de 0 a 10.");
    return;
  }

  var media = (nota1 + nota2 + nota3 + nota4) / 4;

  var mensagem = document.getElementById("mensagem");
  if (media >= 8) {
    mensagem.textContent =
      "Parabéns! Sua média é: " + media + ". Você tem um grande potencial!";
  } else if (media >= 6) {
    mensagem.textContent =
      "Parabéns! Sua média é: " + media + ". Continue assim!";
  } else {
    mensagem.textContent =
      "Sua média é: " +
      media +
      ". Você está indo bem, mas pode melhorar ainda mais. Continue se esforçando!";
  }
  mensagem.style.display = "block";
}

function fecharMensagem() {
  document.getElementById("mensagem").style.display = "none";
}

function justificafalta(form) {
  var jf = confirm("Justifica Falta " + form.nomealuno.value + "?");

  if (jf == true) {
    var textojf = prompt("Digite a justificativa");
    alert("Falta justificada com a seguinte razão: " + textojf);
  } else {
    alert("Falta não Justificada");
  }
}

function testa_form() {
  var n = document.forms["formalunos"]["nome_aluno"].value;
  var m = document.forms["formalunos"]["matricula"].value;
  if (m == null || m == "") {
      alert("Número de Matricula precisa ser informado");
      return false;
  }
  if (n == null || n == "") {
      alert("Nome de aluno precisa ser informado");
      return false;
  }
  alert("Dados preenchidos corretamente!");
  return true;
}
function testa_form() {
  var n = document.forms["formalunos"]["nomealuno"].value;
  var m = document.forms["formalunos"]["matricula"].value;
  if (m == null || m == "") {
      alert("Número de Matricula precisa ser informado");
      return false;
  }
  if (n == null || n == "") {
      alert("Nome de aluno precisa ser informado");
      return false;
  }
  alert("Dados preenchidos corretamente!");
  return true;
}


function resultado(form) {
    var media = calcmedia (parseFloat(form.nota1.value), parseFloat(form.nota2.value));
    if (media>=7) {
        alert ("Aprovado "+ media);
    } else {
        alert ("Reprovado "+ media);
    }
}


function justificafalta(form) {
    var jf = confirm("Justifica Falta do(a) "+form.nomealuno.value+" ?"); 
   if (jf == true) {
    var textojf = prompt ("Digite a justificativa.");
    
   } else {

    alert ("Falta não justificada");
    
   }

   
}


function testaform() {

    var n = document.forms["formalunos"]["nomealuno"].value;
    var m = document.forms["formalunos"]["matricula"].value;

     
    
    if (m==null || m=="") {

        alert("A matrícula precisa ser informada");

       } else { 
        
        alert("Matricula digitada");
        
    }

    if (n==null || n=="") {

        alert("Nome do aluno precisa ser informado");

    } else { alert("Aluno digitado");
        
    }
    
}

function testasenha() {
    var p1 = document.forms["formsenha"]["senha"].value; 
    var p2 = document.forms["formsenha"]["confirmasenha"].value; 


    if (p1.length < 6) {
        
        alert("Senha muito pequena");
        return false;
    }

    if (p1 != p2) {

        alert("Senhas diferentes");
        return false;
        
    }
}